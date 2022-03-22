@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Untitled</h5>

        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="gotoId">Go To <span class="sr-only"></span></a>
                        <li class="nav-item active">
                            <div class="input-group mb-3">
                                <select class="form-select" id="gotoId">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">E-mail Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Create Outlook Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Save and New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Close</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Send Object As</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="output">Select output format:</label>

                            <select name="output" id="output">
                                <option value=""></option>
                                <option value="xls">Excel 97 - Excel 2003 Workbook (*.xls)</option>
                                <option value="xlsb">Excel Binary Workbook (*.xlsb)</option>
                                <option value="xlsx">Excel Workbook (*xlsx)</option>
                                <option value="html">HTML (*.htm; *.html)</option>
                                <option value="html">HTML (*.htm; *.html)</option>
                                <option value="workbook">Microsoft Excel 5.0/95 Workbook (*.xls)</option>
                                <option value="pdf">PDF Format (*.pdf)</option>
                                <option value="rtf">Rich Text Format (*.rtf)</option>
                                <option value="txt">Text Files (*.txt)</option>
                                <option value="xps">XPS Format (*.xps)</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="card-body">
        
        <div class="row">
            <div class="col">
                <form>
                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="company" class="form-control" id="company">
                        </div>
                    </div>

                    <br>
                    <h5>Primary Contact</h5>

                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="firstname" class="form-control" id="firstname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="lastname" class="form-control" id="lastname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="job" class="col-sm-3 col-form-label">Job Title</label>
                        <div class="col-sm-9">
                            <input type="job" class="form-control" id="job">
                        </div>
                    </div>

                    <br>
                    <h5>Phone Numbers</h5>

                    <div class="row mb-3">
                        <label for="businessphone" class="col-sm-3 col-form-label">Business Phone</label>
                        <div class="col-sm-9">
                            <input type="business" class="form-control" id="business">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mobilephone" class="col-sm-3 col-form-label">Mobile Phone</label>
                        <div class="col-sm-9">
                            <input type="mobile" class="form-control" id="mobile">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fax" class="col-sm-3 col-form-label">Fax Number</label>
                        <div class="col-sm-9">
                            <input type="fax" class="form-control" id="fax">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fax" class="col-sm-3 col-form-label">Fax Number</label>
                        <div class="col-sm-9">
                            <input type="fax" class="form-control" id="fax">
                        </div>
                    </div>

                    <br>
                    <h5>Address</h5>

                    <div class="row mb-3">
                        <label for="street" class="col-sm-3 col-form-label">Street</label>
                        <div class="col-sm-9">
                            <input type="street" class="form-control" id="street">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="city" class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                            <input type="city" class="form-control" id="city">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="state" class="col-sm-3 col-form-label">State/Province</label>
                        <div class="col-sm-9">
                            <input type="state" class="form-control" id="state">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="zip" class="col-sm-3 col-form-label">Zip/Postal Code</label>
                        <div class="col-sm-9">
                            <input type="zip" class="form-control" id="zip">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="country" class="col-sm-4 col-form-label">Country/Region</label>
                        <div class="col-sm-8">
                            <input type="country" class="form-control" id="country">
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="web" class="col-sm-2 col-form-label">Web Page</label>
                    <div class="col-sm-10">
                        <input type="web" class="form-control" id="web">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                    <div class="col-sm-10">
                        <input type="notes" class="form-control" id="notes">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="img" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="img">
                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>

</div>




@endsection