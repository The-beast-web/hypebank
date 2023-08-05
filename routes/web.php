<?php

use App\Http\Controllers\Admin\CardController as AdminCardController;
use App\Http\Controllers\Admin\DepositController as AdminDepositController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\KycController;
use App\Http\Controllers\Admin\LoanController as AdminLoanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AccountSetupController;
use App\Http\Controllers\Customer\CardController;
use App\Http\Controllers\Customer\HomeController as CustomerHomeController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\SetupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\WithdrawalController as AdminWithdrawalController;
use App\Http\Controllers\Customer\AccountController;
use App\Http\Controllers\Customer\LoanController;
use App\Http\Controllers\Customer\TransactionController;
use App\Http\Controllers\Customer\TransferController;
use App\Http\Controllers\Customer\WithdrawalController;
use App\Models\Deposit;
use App\Models\LoanPackage;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\DepositApproval;
use Dflydev\DotAccessData\Util;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

    $user = App\Models\User::find(6);

    dd($user->unreadNotifications()->count());

    foreach ($user->unreadNotifications as $notification) {
        //$notification->markAsRead();
    }

    /*  $loan = LoanPackage::find(1);
    return view('test', compact('loan')); */


    //dd(Illuminate\Notifications\DatabaseNotification::first()->data['message']);

    //Auth::user()->notify(new DepositApproval(Deposit::find(18)));

    /*  $trend = Trend::model(User::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();

    dd(
        $trend->map(fn (TrendValue $value) => $value->aggregate),
        $trend->map(fn (TrendValue $value) => $value->date)
    ); */
});


/* AUTH ROUTES */
Auth::routes(['verify' => true]);

/* END OF AUTH ROUTES */


/* ADMIN ROUTES */
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminHomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('users', UserController::class);

    /* KYC ROUTES */
    Route::get('/kyc', [KycController::class, 'list'])->name('kyc.list');
    Route::get('/kyc/{id}', [KycController::class, 'detail'])->name('kyc.detail');
    Route::get('/kyc/{id}/approve', [KycController::class, 'approve'])->name('kyc.approve');
    Route::get('/kyc/{id}/cancel', [KycController::class, 'cancel'])->name('kyc.cancel');
    Route::get('/kyc/{id}/decline', [KycController::class, 'decline'])->name('kyc.decline');
    /* END OF KYC ROUTES */

    // DEPOSIT ROUTES
    Route::get('/deposits', [AdminDepositController::class, 'index'])->name('deposits');
    Route::get('/deposits/trash', [AdminDepositController::class, 'viewTrash'])->name('deposits.trash');
    Route::get('/deposits/trash/{id}/restore', [AdminDepositController::class, 'trashRestore'])->name('deposits.trash.restore');
    Route::get('/deposits/trash/{id}/delete-for-admin', [AdminDepositController::class, 'deleteTrashForAdmin'])->name('deposits.trash.delete.admin');
    Route::get('/deposits/trash/{id}/delete-for-all', [AdminDepositController::class, 'deleteTrashForAll'])->name('deposits.trash.delete.all');
    Route::get('/deposits/{id}', [AdminDepositController::class, 'details'])->name('deposits.details');
    Route::get('/deposits/approve/{id}', [AdminDepositController::class, 'approve'])->name('deposits.approve');
    Route::get('/deposits/cancel/{id}', [AdminDepositController::class, 'cancel'])->name('deposits.cancel');
    Route::get('/deposits/decline/{id}', [AdminDepositController::class, 'decline'])->name('deposits.decline');
    Route::get('/deposits/delete/{id}', [AdminDepositController::class, 'delete'])->name('deposits.delete');


    //WITHDRAWAL ROUTES
    Route::name('withdraw.')->prefix('withdrawals')->group(function () {
        Route::get('/', [AdminWithdrawalController::class, 'viewList'])->name('list');
        Route::get('/trash', [AdminWithdrawalController::class, 'viewTrash'])->name('trash');
        Route::get('/trash/{id}/restore', [AdminWithdrawalController::class, 'trashRestore'])->name('trash.restore');
        Route::get('/trash/{id}/delete-for-admin', [AdminWithdrawalController::class, 'deleteTrashForAdmin'])->name('trash.delete.admin');
        Route::get('/trash/{id}/delete-for-all', [AdminWithdrawalController::class, 'deleteTrashForAll'])->name('trash.delete.all');
        Route::get('/{id}', [AdminWithdrawalController::class, 'viewSingle'])->name('detail');
        Route::get('/{id}/approve', [AdminWithdrawalController::class, 'approve'])->name('approve');
        Route::get('/{id}/cancel', [AdminWithdrawalController::class, 'cancel'])->name('cancel');
        Route::get('/{id}/decline', [AdminWithdrawalController::class, 'decline'])->name('decline');
        Route::get('/{id}/trash', [AdminWithdrawalController::class, 'delete'])->name('delete');
    });


    /* CARD ROUTES */
    Route::get('/cards', [AdminCardController::class, 'viewAvailable'])->name('card');
    Route::get('/cards/requests', [AdminCardController::class, 'view'])->name('card.request');
    Route::get('/card-approve/{id}', [AdminCardController::class, 'approve'])->name('card.approve');
    Route::get('/card-request-successful', [AdminCardController::class, 'success'])->name('card.success');

    // SETTINGS ROUTE
    Route::get('/settings-general', [SettingsController::class, 'view'])->name('setting');
    Route::post('/settings-general-update', [SettingsController::class, 'updateGeneral'])->name('setting.update_general');

    Route::get('/settings/payment-gateway', [SettingsController::class, 'viewPaymentGateway'])->name('setting.payment-gateway');
    Route::post('/setting', [SettingsController::class, 'processPaymentGateway'])->name('payment');
    // END OF SETTINGS ROUTE

    /* LOAN ROUTES */
    /* LOAN REQUEST ROUTES */
    Route::get('/loan/requests', [AdminLoanController::class, 'viewRequest'])->name('loan.request');
    Route::get('/loan/requests/{id}', [AdminLoanController::class, 'requestDetail'])->name('loan.request.detail');
    Route::get('/loan/requests/approve/{id}', [AdminLoanController::class, 'approveRequest'])->name('loan.request.approve');
    Route::get('/loan/requests/cancel/{id}', [AdminLoanController::class, 'cancelLoanApproval'])->name('loan.request.cancel');
    Route::get('/loan/requests/decline/{id}', [AdminLoanController::class, 'declineRequest'])->name('loan.request.decline');
    Route::get('/loan/requests/delte/{id}', [AdminLoanController::class, 'deleteRequest'])->name('loan.request.delete');
    /* END OF LOAN REQUEST ROUTES */

    /* ACTIVE LOAN ROUTES */
    Route::get('/loan/active', [AdminLoanController::class, 'viewActive'])->name('loan.active');
    Route::get('/loan/active/{id}', [AdminLoanController::class, 'activeDetail'])->name('loan.active.detail');
});

/* END ADMIN ROUTES */






/* CUSTOMER ROUTES */
Route::middleware('verified')->name('customer.')->prefix('customer')->group(function () {

    //Customer home view route
    Route::get('/', [CustomerHomeController::class, 'dashboard'])->name('dashboard');

    /* KYC ROUTS */
    Route::middleware(['verified', 'restrict'])->group(function () {
        Route::get('/kyc-setup', [AccountSetupController::class, 'viewSetup'])->name('kyc.setup');
        Route::get('/kyc-application', [AccountSetupController::class, 'viewApp'])->name('kyc.app');
        Route::post('/account-setup', [AccountSetupController::class, 'setup'])->name('acc-setup');
    });
    /* END OF KYC ROUTES */

    /* LOAN ROUTES */
    Route::get('/loan', [LoanController::class, 'view'])->name('loan');
    Route::get('/loan/request', [LoanController::class, 'viewPackages'])->name('loan.request');
    Route::get('/loan/request/{id}/{name}/readmore', [LoanController::class, 'readmore'])->name('loan.readmore');
    Route::get('/loan/request/{id}/{name}/apply', [LoanController::class, 'application'])->name('loan.apply');
    Route::post('/loan/request/{id}/apply', [LoanController::class, 'processApp'])->name('loan.process');
    Route::get('/loan/request/successful', [LoanController::class, 'success'])->name('loan.success');
    /* END OF LOAN ROUTES */

    /* ACCOUNT SETTINGS ROUTES */
    Route::get('/settings', [AccountController::class, 'view'])->name('setting');
    Route::post('/settings', [AccountController::class, 'process'])->name('setting.process');
    Route::post('/setting-address', [AccountController::class, 'address_process'])->name('setting.address.process');

    /* CUSTOMER DEPOSIT ROUTES */

    //Deposit main view
    Route::get('/deposit', [App\Http\Controllers\Customer\DepositController::class, 'view'])
        ->name('deposit');

    //Deposit successful view
    Route::get('/deposit-success', [App\Http\Controllers\Customer\DepositController::class, 'depositSuccess'])
        ->name('deposit.success')->middleware('success');

    /* BANK DEPOSIT ROUTES */
    //Bank deposit credentials view
    Route::get('/deposit/bank-method', [App\Http\Controllers\Customer\DepositController::class, 'bankView'])
        ->name('deposit.bank-method');

    //Bank deposit form view
    Route::get('/deposit/bank-deposit', [App\Http\Controllers\Customer\DepositController::class, 'bankDeposit'])
        ->name('deposit.bank-deposit');

    //Bank deposit form route
    Route::post('/deposit/bank', [App\Http\Controllers\Customer\DepositController::class, 'bankDepositProcess'])
        ->name('deposit.bank-deposit-process');
    /* END OF BANK DEPOSIT ROUTES */

    /* PAYPAL DEPOSIT ROUTES */

    //Paypal deposit credentials view
    Route::get('/deposit/paypal-method', [App\Http\Controllers\Customer\DepositController::class, 'paypalView'])
        ->name('deposit.paypal-method');

    Route::get('/deposit/paypal-deposit', [App\Http\Controllers\Customer\DepositController::class, 'paypalDeposit'])
        ->name('deposit.paypal-deposit');

    Route::post('/deposit/paypal', [App\Http\Controllers\Customer\DepositController::class, 'paypalDepositProcess'])
        ->name('deposit.paypal-deposit-process');
    /* END OF PAYPAL DEPOSIT */

    /* BITCOIN DEPOSIT ROUTES */
    Route::get('/deposit/bitcoin-method', [App\Http\Controllers\Customer\DepositController::class, 'bitcoinView'])
        ->name('deposit.bitcoin-method');

    Route::get('/deposit/bitcoin-deposit', [App\Http\Controllers\Customer\DepositController::class, 'bitcoinDeposit'])
        ->name('deposit.bitcoin-deposit');

    Route::post('/deposit/bitcoin', [App\Http\Controllers\Customer\DepositController::class, 'bitcoinDepositProcess'])
        ->name('deposit.bitcoin-deposit-process');
    /* END OF BITCOIN DEPOSIT */

    /* END OF DEPOSIT ROUTES */

    /* CARD ROUTES */
    Route::get('/cards', [CardController::class, 'view'])->name('card');
    Route::post('/cards', [CardController::class, 'cardRequest'])->name('card.request');
    Route::get('/card-request-successful', [CardController::class, 'success'])->name('card.success');
    /* END OF CARD REQUEST ROUTE */

    /* TRANSFER ROUTES */
    Route::middleware('setup')->group(function () {
        Route::get('/transfer', [TransferController::class, 'view'])->name('transfer');
        Route::post('/transfer', [TransferController::class, 'process'])->name('transfer.transfer-process');
        Route::get('/transfer-successful', [TransferController::class, 'success'])->name('transfer.success');
    });
    /* END OF TRANSFER ROUTES */

    /* WITHDRAWAL ROUTES */
    Route::get('/withdrawal', [WithdrawalController::class, 'viewMethods'])->name('withdraw.methods');
    Route::get('/withdrawal-successful', [WithdrawalController::class, 'viewSuccess'])->name('withdraw.success')->middleware('success');

    /* BANK WITHDRAWAL ROUTES */
    Route::get('/bank-withdrawal', [WithdrawalController::class, 'viewBankMethod'])->name('withdraw.bank');
    Route::post('/bank-method', [WithdrawalController::class, 'processBankMethod'])->name('withdraw.bank.process');
    /* END OF BANK WITHDRAWAL ROUTES */

    /* PAYPAL WITHDRAWAL ROUTES */
    Route::get('/paypal-withdrawal', [WithdrawalController::class, 'viewPaypalMethod'])->name('withdraw.paypal');
    Route::post('/paypal-method', [WithdrawalController::class, 'processPaypalMethod'])->name('withdraw.paypal.process');

    /* TRANSACTIONS ROUTES */
    Route::get('/transactions', [TransactionController::class, 'view'])->name('transaction');
    Route::get('/transaction/{id}', [TransactionController::class, 'detail'])->name('transaction.detail');
    Route::get('/transaction/{id}/delete', [TransactionController::class, 'delete'])->name('transaction.delete');
});

/* END CUSTOMER ROUTES */
