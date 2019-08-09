<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device width,initialscale=1,shrinkto-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('Bootstrap_Helpers/winmarkltd-BootstrapFormHelpers-d6770e0/dist/css/bootstrap-formhelpers.css')}}">
    <link rel="stylesheet" href="{{asset('reportForm.css')}}">
</head>
<body >
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="{{route('donate_form')}}" method="post">
                @csrf
                        <h2 class="modal-title text-center" id="exampleModalLabel">Donation Title</h2>

                        @if(Session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin:0 auto; width:500px; margin-bottom: 10px;">
                            {{Session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <!-- Name -->
                        <div class="form-group">
                            <label for="donationInputName">Name</label>
                            <input type="text" class="form-control" id="donationInputName" name="donationInputName" placeholder="Enter donar name" value="{{old('donationInputName')}}">
                            <span style="color: red;">{{ $errors->first('donationInputName')}}</span>
                        </div>

                        <!-- Name -->
                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="donationInputPhoneNumber">Phone Number</label>
                            <input type="text" class="form-control" id="donationInputPhoneNumber" name="donationInputPhoneNumber" placeholder="Enter donar phone number(09-123456789)" value="{{old('donationInputPhoneNumber')}}">
                            <span style="color: red;">{{ $errors->first('donationInputPhoneNumber') }}</span>
                        </div>

                        <!-- Phone Number -->
                        <!-- Country And State -->
                        <label for="selectedCountry">Country</label>
                        <select id="countries_states1" class="form-control bfh-countries" data-country="US" name="selectedCountry" data-flags="true" value="{{old('selectedCountry')}}"></select>
                        <br>
                        <label for="selectedState">State</label>
                        <select class="form-control bfh-states" data-country="countries_states1" data-state="LA" name="selectedState" value="{{old('selectedState')}}"></select>
                        <br>
                        <!-- Country And State -->
                        <!-- Address(Details) -->
                        <div class="form-group">
                            <label for="donationInputAddress">Address(Details)</label>
                            <textarea class="form-control" id="donationInputAddress" name="address" rows="2" value="{{old('address')}}"></textarea>
                            <span style="color: red;">{{ $errors->first('address')}}</span>
                        </div>
                        <!-- Address(Details) -->
                {{--donate_category--}}
                        <div class="form-group">
                            <label for="donate_category">Which category you want to donate?</label>
                            <select name="donate_category" class="form-control request_textarea"  required value="{{old('donate_category')}}">
                              @foreach($category as $categories)
                                    <option value="{{$categories->category_name}}">{{$categories->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                {{-- donate_category--}}
                <div class="form-group">
                    <label for="donate_foundation">Which foundation you want to donate?</label>
                            <select id="aa" name="donate_foundation" class="form-control request_textarea"  required  value="{{old('donate_foundation')}}">
                       @foreach($foundation as $foundations)
                           <option id="aa" value="{{$foundations->foundation_name}}">{{$foundations->foundation_name}}</option>
                     @endforeach
                    </select>
                </div>
                        <!-- Payment Design  -->
                        <div class="form-group">
                            <label for="donationInputOption">How will you donate?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Cash" value="{{old('inlineRadioOptions')}}">
                                <label class="form-check-label" for="inlineRadio1" >Cash</label>
                            </div>
                            <div class="form-group form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Wave-Money" value="{{old('inlineRadioOptions')}}">
                                <label class="form-check-label" for="inlineRadio2">Wave-Money</label>
                            </div>
                            <div class="form-group form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="M-PiteSan" value="{{old('inlineRadioOptions')}}">
                                <label class="form-check-label" for="inlineRadio3">M-PiteSan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="PayPal" value="{{old('inlineRadioOptions')}}">
                                <label class="form-check-label" for="inlineRadio4">PayPal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="Bank Accounts" value="{{old('inlineRadioOptions')}}">
                                <label class="form-check-label" for="inlineRadio5" class="bankAccounts">Bank Account</label>
                            </div>
                        </div>
                        <!-- Payment Design -->
                        <!-- DatePicker -->
                        <div class="form-group">
                            <label for="donationInputDate">Date</label>
                            <input id="datepicker" name="date" width="100%" placeholder="Enter the date to donate..." value="{{old('date')}}">
                            <span style="color: red;">{{ $errors->first('date')}}</span>
                        </div>
                        <!-- DatePicker -->
                        <!-- Amount -->
                        <div class="form-group">
                            <label for="donationInputAmount"><h5>Donation Amount</h5></label>
                            <div style="margin: 0; width: 100%">
                                <label for="selectedCurrency">Currency</label>
                                <select class="form-control bfh-currencies" data-currency="EUR" name="selectedCurrency" required value="{{old('selectedCurrency')}}"></select><br>
                                <span style="color: red;">{{ $errors->first('selectedCurrency')}}</span>
                                <label for="amount">Amount</label>
                                <input type="text" class="form-control" id="donationInputAmount" name="amount" placeholder="Enter the amount of donation..."  value="{{old('amount')}}">
                                <span style="color: red;">{{ $errors->first('amount')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{route('donate_form_cancel')}}" type="button" class="btn btn-dark btn-block" data-dismiss="modal" > Cancel</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-dark btn-block">Donate</button>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>

<!-- Donation Modal -->
<div class="modal fade" id="donationFormModal" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 100%; margin: 0 auto;">

    </div>
</div>
<!-- donation modal -->

<!-- report modal -->
<div class="modal fade" id="reportFormModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 550px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Report Form</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="foundationName">Foundation Name: </label>
                    <input type="text" name="foundationName" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="foundationOption">Why you want to report this post?</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="reportingOptions1" name="reportingOptions" checked>
                        <label class="custom-control-label" for="reportingOptions1">irrelevant</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="reportingOptions2" name="reportingOptions">
                        <label class="custom-control-label" for="reportingOptions2">fake post</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="reportingOptions3" name="reportingOptions">
                        <label class="custom-control-label" for="reportingOptions3">already completed</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="reportingOptions4" name="reportingOptions">
                        <label class="custom-control-label" for="reportingOptions4">other</label>
                    </div>
                    <div class="form-group" id="toggleTextarea" style="display: none;">
                        <textarea class="form-control" rows="5" id="reportingReason"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 auto;">Close</button>
                <button type="button" class="btn btn-primary">Report</button>
            </div>
        </div>
    </div>
</div>
<!-- report modal -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="{{asset('Bootstrap_Helpers/winmarkltd-BootstrapFormHelpers-d6770e0/dist/js/bootstrap-formhelpers.js')}}"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<script src="{{asset('donationForm.js')}}"></script>
<!-- js of report form modal -->
<script type="text/javascript" src="{{asset('reportForm.js')}}"></script>
<!-- js of report form modal -->
</body>

</html>
