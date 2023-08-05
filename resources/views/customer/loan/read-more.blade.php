@extends('customer.layout.master')

@section('content')
    <!-- content @s
        -->
        <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-lg">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Package Documents</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-content">
                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#eligibility"><em
                                                class="icon ni ni-user-check-fill"></em><span>Terms & Conditions</span></a>
                                    </li>
                                </ul><!-- .nav-tabs -->
                                <div class="card-inner">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="eligibility">
                                            <p>You can apply for this loan right now if you meet the following criteria:</p>
                                            <div class="wide-sm">
                                                <div id="accordion-1" class="accordion accordion-s2">
                                                    <div>
                                                        <a href="#" class="accordion-head" data-bs-toggle="collapse"
                                                            data-bs-target="#accordion-education">
                                                            <h6 class="title">Education </h6>
                                                            <span class="accordion-icon"></span>
                                                        </a>
                                                        <div class="collapse show" id="accordion-education"
                                                            data-bs-parent="#accordion-1">
                                                            <div class="accordion-inner">
                                                                <ul>
                                                                    <li class="list-item">Minimum age of the applicant should be
                                                                        20years and maximum 35 years.</li>
                                                                    <li class="list-item">Need Higher National Certificate (HNC)
                                                                        or Higher National Diploma (HND).</li>
                                                                    <li class="list-item">Scoring high grades/ranking in the
                                                                        qualifying exams.</li>
                                                                    <li class="list-item">Displaying good prospects for future
                                                                        employment/income generation.</li>
                                                                    <li class="list-item">Strong financial background of
                                                                        parents/guardians/co-borrower.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="accordion-head collapsed"
                                                            data-bs-toggle="collapse" data-bs-target="#accordion-service">
                                                            <h6 class="title">Service Holder</h6>
                                                            <span class="accordion-icon"></span>
                                                        </a>
                                                        <div class="collapse" id="accordion-service"
                                                            data-bs-parent="#accordion-1">
                                                            <div class="accordion-inner">
                                                                <ul class="nav nav-tabs mt-n3">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                                            href="#govt"><span>Government</span></a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#non-govt"><span>Non-government</span></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="govt">
                                                                        <ul>
                                                                            <li class="list-item">Minimum age of the applicant
                                                                                should be 21years and maximum 65 years.</li>
                                                                            <li class="list-item">Govt. and permanent salaried
                                                                                employees with a minimum income of 400 USD per
                                                                                month are eligible for loan</li>
                                                                            <li class="list-item">At least 6 months experience
                                                                                in their current job with a total experience of
                                                                                3 years</li>
                                                                            <li class="list-item">CIBIL score should be 700 or
                                                                                more than that with a good credit history which
                                                                                is equally important to get approvalon loan
                                                                                application</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="non-govt">
                                                                        <ul>
                                                                            <li class="list-item">The borrower must be
                                                                                creditworthy or have a creditworthy cosigner
                                                                            </li>
                                                                            <li class="list-item">Creditworthiness can be
                                                                                measured using credit scores, annual income,
                                                                                debt-to-income ratios and employment history.
                                                                            </li>
                                                                            <li class="list-item">The minimum legal age of a
                                                                                private student loan borrower may depend on the
                                                                                state of residence. The age of majority is
                                                                                21years</li>
                                                                            <li class="list-item">Eligibility also can depend on
                                                                                a degree, academic major or participating
                                                                                school.</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="accordion-head collapsed"
                                                            data-bs-toggle="collapse" data-bs-target="#accordion-bussiness">
                                                            <h6 class="title">Bussinessman</h6>
                                                            <span class="accordion-icon"></span>
                                                        </a>
                                                        <div class="collapse" id="accordion-bussiness"
                                                            data-bs-parent="#accordion-1">
                                                            <div class="accordion-inner">
                                                                <ul class="nav nav-tabs mt-n3">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                                            href="#sole-proprietorship"><span>Sole
                                                                                proprietorship</span></a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#limited-liability"><span>Limited
                                                                                liability</span></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="sole-proprietorship">
                                                                        <ul>
                                                                            <li class="list-item">Age should be greater than 21
                                                                                years and less than 65 years on liquidation of
                                                                                the loan</li>
                                                                            <li class="list-item">The business should be
                                                                                operational for a minimum continuous period of 6
                                                                                months</li>
                                                                            <li class="list-item">The quarterly turnover should
                                                                                be higher than 1500 USD</li>
                                                                            <li class="list-item">The business activity should
                                                                                not be in the negative list, and the location of
                                                                                the business should not be in a restricted site.
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="limited-liability">
                                                                        <ul>
                                                                            <li class="list-item">Operate for profit</li>
                                                                            <li class="list-item">Be engaged in, or propose to
                                                                                do business</li>
                                                                            <li class="list-item">Have reasonable owner equity
                                                                                to invest</li>
                                                                            <li class="list-item">Use alternative financial
                                                                                resources, including personal assets, before
                                                                                seeking financial assistance.</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="accordion-head collapsed"
                                                            data-bs-toggle="collapse" data-bs-target="#accordion-privileged">
                                                            <h6 class="title">Under Privileged People</h6>
                                                            <span class="accordion-icon"></span>
                                                        </a>
                                                        <div class="collapse" id="accordion-privileged"
                                                            data-bs-parent="#accordion-1">
                                                            <div class="accordion-inner">
                                                                <ul>
                                                                    <li class="list-item">Minimum age of the applicant should
                                                                        be 15years and maximum 65 years.</li>
                                                                    <li class="list-item">Have reasonable owner equity to
                                                                        invest</li>
                                                                    <li class="list-item">Use alternative financial resources,
                                                                        including personal assets, before seeking financial
                                                                        assistance.</li>
                                                                    <li class="list-item">The borrower must be creditworthy or
                                                                        have a creditworthy cosigner</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="accordion-head collapsed"
                                                            data-bs-toggle="collapse" data-bs-target="#accordion-quota">
                                                            <h6 class="title">Quota (Special)</h6>
                                                            <span class="accordion-icon"></span>
                                                        </a>
                                                        <div class="collapse" id="accordion-quota"
                                                            data-bs-parent="#accordion-1">
                                                            <div class="accordion-inner">
                                                                <ul class="nav nav-tabs mt-n3">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                                            href="#superpatriot"><span>Superpatriot</span></a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#aged"><span>Aged people</span></a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-bs-toggle="tab"
                                                                            href="#disable"><span>Disable people</span></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="superpatriot">
                                                                        <ul>
                                                                            <li class="list-item">Age should be greater than 21
                                                                                years and less than 60 years on liquidation of
                                                                                the loan</li>
                                                                            <li class="list-item">The patriot should be
                                                                                operational for a minimum continuous period of 1
                                                                                year</li>
                                                                            <li class="list-item">The patriot should be citizen
                                                                                of this country</li>
                                                                            <li class="list-item">Loans have long terms,
                                                                                ranging from 10 to 25 years, and affordable
                                                                                interest-rates.</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="aged">
                                                                        <ul>
                                                                            <li class="list-item">Age should be greater than 40
                                                                                years and less than 75 years on liquidation of
                                                                                the loan</li>
                                                                            <li class="list-item">The person should be citizen
                                                                                of this country</li>
                                                                            <li class="list-item">Loans have long terms,
                                                                                ranging from 15 to 25 years, and affordable
                                                                                interest-rates.</li>
                                                                            <li class="list-item">To avail is this aged loan,
                                                                                he should be minimum earning income 500 USD .
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" id="disable">
                                                                        <ul>
                                                                            <li class="list-item">The borrower should be
                                                                                citizen with a minimum of 40% disability.</li>
                                                                            <li class="list-item">The applicant should be aged
                                                                                between 18 years and 55 years</li>
                                                                            <li class="list-item">The annual income of the
                                                                                applicant should be at least 500 USD in urban
                                                                                areas and 400 USD in rural areas.</li>
                                                                            <li class="list-item">The applicants should
                                                                                preferably be frequent members of self-help
                                                                                groups such as Thrift and Credit Group.</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="custom-control custom-control-md custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="note">
                                                            <label class="custom-control-label" for="note">
                                                                <p>I have carefully read through the terms and agree to it.</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <ul class="pt-2">
                                                        <li>
                                                            <button class="btn btn-primary" id="bt_submit" data-dismiss="modal">
                                                            <a href="{{ route('customer.loan.apply', [$loan->id, $loan->name]) }}" class="text-white">Apply Now</a>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card-content -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endsection
