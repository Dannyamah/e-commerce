<x-app-layout>

        <!-- Body: Body -->
        <div class="body d-flex py-3">
            <div class="container-xxl">

                <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                    <div class="col">
                        <div class="alert-success alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-dollar fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">Revenue</div>
                                    <span class="small">$18,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert-danger alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="fa fa-credit-card fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">Expense</div>
                                    <span class="small">$11,024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert-warning alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="fa fa-smile-o fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">Happy Clients</div>
                                    <span class="small">8,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert-info alert mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="h6 mb-0">New StoreOpen</div>
                                    <span class="small">8,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->

                <div class="row g-3">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-filter d-flex align-items-center justify-content-between mb-3 flex-wrap">
                            <ul class="nav nav-tabs tab-card tab-body-header rounded  d-inline-flex w-sm-100">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#summery-today" >Today</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-week" >Week</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-month" >Month</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-year" >Year</a></li>
                            </ul>
                            <div class="date-filter d-flex align-items-center mt-2 mt-sm-0 w-sm-100">
                                <div class="input-group">
                                    <input type="date" class="form-control">
                                    <button class="btn btn-primary" type="button"><i class="icofont-filter fs-5"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content mt-1">
                            <div class="tab-pane fade show active" id="summery-today">
                                <div class="row g-1 g-sm-3 mb-3 row-deck">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Customers</span>
                                                    <div><span class="fs-6 fw-bold me-2">14,208</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Order</span>
                                                    <div><span class="fs-6 fw-bold me-2">2314</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$1770</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Item Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">185</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$35000</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Visitors</span>
                                                    <div><span class="fs-6 fw-bold me-2">11452</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-users-social fs-3 color-light-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Products</span>
                                                    <div><span class="fs-6 fw-bold me-2">184511</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-bag fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Top Selling Item</span>
                                                    <div><span class="fs-6 fw-bold me-2">122</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-star fs-3 color-lightyellow"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Dealership</span>
                                                    <div><span class="fs-6 fw-bold me-2">32</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- row end -->
                            </div>
                            <div class="tab-pane fade" id="summery-week">
                                <div class="row g-3 mb-4 row-deck">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Customers</span>
                                                    <div><span class="fs-6 fw-bold me-2">54,208</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Order</span>
                                                    <div><span class="fs-6 fw-bold me-2">12314</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$11770</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Item Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">1185</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$135000</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Visitors</span>
                                                    <div><span class="fs-6 fw-bold me-2">111452</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-users-social fs-3 color-light-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Products</span>
                                                    <div><span class="fs-6 fw-bold me-2">194511</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-bag fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Top Selling Item</span>
                                                    <div><span class="fs-6 fw-bold me-2">1122</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-star fs-3 color-lightyellow"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Dealership</span>
                                                    <div><span class="fs-6 fw-bold me-2">132</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- row end -->
                            </div>
                            <div class="tab-pane fade" id="summery-month">
                                <div class="row g-3 mb-4 row-deck">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Customers</span>
                                                    <div><span class="fs-6 fw-bold me-2">74,208</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Order</span>
                                                    <div><span class="fs-6 fw-bold me-2">22314</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$21770</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Item Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">2185</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$235000</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Visitors</span>
                                                    <div><span class="fs-6 fw-bold me-2">211452</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-users-social fs-3 color-light-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Products</span>
                                                    <div><span class="fs-6 fw-bold me-2">284511</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-bag fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Top Selling Item</span>
                                                    <div><span class="fs-6 fw-bold me-2">222</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-star fs-3 color-lightyellow"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Dealership</span>
                                                    <div><span class="fs-6 fw-bold me-2">232</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- row end -->
                            </div>
                            <div class="tab-pane fade" id="summery-year">
                                <div class="row g-3 mb-4 row-deck">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Customers</span>
                                                    <div><span class="fs-6 fw-bold me-2">104,208</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Order</span>
                                                    <div><span class="fs-6 fw-bold me-2">252314</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$852770</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Avg Item Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">75885</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Sale</span>
                                                    <div><span class="fs-6 fw-bold me-2">$350000</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Visitors</span>
                                                    <div><span class="fs-6 fw-bold me-2">114521452</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-users-social fs-3 color-light-success"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Total Products</span>
                                                    <div><span class="fs-6 fw-bold me-2">884511</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-bag fs-3 color-light-orange"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Top Selling Item</span>
                                                    <div><span class="fs-6 fw-bold me-2">7522</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-star fs-3 color-lightyellow"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                <div class="left-info">
                                                    <span class="text-muted">Dealership</span>
                                                    <div><span class="fs-6 fw-bold me-2">1832</span></div>
                                                </div>
                                                <div class="right-icon">
                                                    <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- row end -->
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Sales Status</h6>
                            </div>
                            <div class="card-body">
                                <div id="apex-GenderOverview"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-xxl-8 col-xl-8">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Shopping Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="ac-line-transparent" id="apex-shoppingstatus"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Top Selling Product</h6>
                            </div>
                            <div class="card-body">
                                <div id="topselling"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Our Branch Location & Revenue</h6>
                            </div>
                            <div class="card-body">
                                <div id="googleMap" style="width:100%;height:397px;"></div>
                                <div class="location-revenue mt-5">
                                    <label class="fw-bold">India</label>
                                    <div class="progress mb-4" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <label class="fw-bold">Mauritius</label>
                                    <div class="progress mb-4" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 45%" aria-valuenow="45"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <label class="fw-bold">Colombia</label>
                                    <div class="progress mb-4" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <label class="fw-bold">Russia</label>
                                    <div class="progress mb-4" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <label class="fw-bold">France</label>
                                    <div class="progress mb-3" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->

                <div class="row g-3 mb-3 row-deck">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Active Users Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="p-4 active-user bg-lightblue rounded-2 mb-2">
                                    <span class="fw-bold d-flex justify-content-center fs-3">1345</span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Active pages</th>
                                            <th scope="col">Users</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">/dist/product.html</a></td>
                                            <td>245</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">/dist/product-cart.html</a></td>
                                            <td>455</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">/dist/admin-profile.html</a></td>
                                            <td>45</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">/dist/order-history.html</a></td>
                                            <td>545</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">/dist/product-detail.html</a></td>
                                            <td>55</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Avg Expense Costs</h6>
                            </div>
                            <div class="card-body">
                                <div class="h2 mb-0">$1105.5</div>
                                <span class="text-muted small">Avg Expense Costs All Month</span>
                                <div id="apex-expense"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Recent Transactions</h6>
                            </div>
                            <div class="card-body">
                                <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Item</th>
                                            <th>Customer Name</th>
                                            <th>Payment Info</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>#Order-78414</strong></td>
                                            <td><img src="/d_assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span> Oculus VR </span></td>
                                            <td>Molly</td>
                                            <td>Credit Card</td>
                                            <td>
                                                $420
                                            </td>
                                            <td><span class="badge bg-warning">Progress</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>#Order-58414</strong></td>
                                            <td><img src="/d_assets/images/product/product-2.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Wall Clock</span></td>
                                            <td>Brian</td>
                                            <td>Debit Card</td>
                                            <td>
                                                $220
                                            </td>
                                            <td><span class="badge bg-success">Complited</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>#Order-48414</strong></td>
                                            <td><img src="/d_assets/images/product/product-3.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Note Diaries</span></td>
                                            <td>Julia</td>
                                            <td>Debit Card</td>
                                            <td>
                                                $250
                                            </td>
                                            <td><span class="badge bg-success">Complited</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>#Order-38414</strong></td>
                                            <td><img src="/d_assets/images/product/product-4.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Flower Port</span></td>
                                            <td>Sonia</td>
                                            <td>Credit Card</td>
                                            <td>
                                                $320
                                            </td>
                                            <td><span class="badge bg-warning">Progress</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>#Order-28414</strong></td>
                                            <td><img src="/d_assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Oculus VR</span></td>
                                            <td>Adam H</td>
                                            <td>Debit Card</td>
                                            <td>
                                                $20
                                            </td>
                                            <td><span class="badge bg-warning">Progress</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>#Order-18414</strong></td>
                                            <td><img src="/d_assets/images/product/product-2.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Wall Clock</span></td>
                                            <td>Alexander</td>
                                            <td>Debit Card</td>
                                            <td>
                                                $820
                                            </td>
                                            <td><span class="badge bg-success">Complited</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>#Order-11414</strong></td>
                                            <td><img src="/d_assets/images/product/product-3.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Note Diaries</span></td>
                                            <td>Gabrielle</td>
                                            <td>Bank Emi</td>
                                            <td>
                                                $620
                                            </td>
                                            <td><span class="badge bg-success">Complited</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->

            </div>
        </div>

    </div>

</x-app-layout>
