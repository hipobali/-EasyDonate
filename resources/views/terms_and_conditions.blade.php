@extends('layouts.app1')
@if(Auth::user())
    @extends('layouts.nav')
@endif
@extends('layouts.donor_nav')
@section('content')
    <title>Terms And Conditions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- bootstrap.css -->

    <!-- terms_and_policies.css -->
    <link rel="stylesheet" href="{{asset('css/terms_and_conditions.css')}}">
    <!-- terms_and_policies.css -->

    <!-- background-design.css -->
    <!-- <link rel="stylesheet" href="background-design.css"> -->
    <!-- background-design.css -->

    <!-- main body -->
    <div class="container-fluid" style="width: 100%">

        <!-- main title -->
        <h1 style="margin: 1.5vw auto; color: hsl(35,100%,50%)">Terms And Conditions</h1>
        <!-- main title -->

        <!-- foundation -->
        <div class="container foundation">
            <!-- subtitle foundation -->
            <h3 class="subtitle-foundation-h2" style="color: hsl(35,100%,50%)">Non Profit Organization(Foundation)</h3>
            <!-- subtitle foundation -->

            <!-- content foundation -->
            <ul class="content-foundation-ul">
                <li>
                    The organization must have to register.
                </li>
                <li>
                    To register, the organization has to add the count of members and
                    founded year to determine the foundation is real or fake.
                </li>
                <li>
                    Before accepting the request from the people-in-need, please read carefully the information of the people-in-need
                    (After accepting the request, the foundation cannot cancel or deny the request).
                </li>
                <li>
                    Every post that uploaded to the website by 'A Organization' have to take fully responsibility by the 'A Organzation'.
                    (Note: In 'A Organization', 'A' means the name of organzation).
                </li>
                <li>
                    Please enter the registeration certificate, or allowance of the authority.
                </li>
            </ul>
            <!-- content foundation -->
        </div>
        <!-- foundation -->

        <!-- people-in-need -->
        <div class="container people-in-need">
            <!-- subtitle people-in-need -->
            <h3 class="subtitle-people-in-need-h2" style="color: hsl(35,100%,50%)">Non Profit Organization(Foundation)</h3>
            <!-- subtitle/ people-in-need -->
            <!-- content people-in-need -->
            <ul class="content-people-in-need-ul">
                <li>
                    People-in-need(user who want to post the request) must have to regiter.
                </li>
                <li>
                    To register, people-in-need must have to fill the registeration correctly.
                </li>
                <li>
                    To post the request about needed area or place, please post the information
                    with statements(photos or videos).
                </li>
            </ul>
            <!-- content people-in-need -->
        </div>
        <!-- people-in-need -->

        <!-- donor -->
        <div class="container donor">
            <!-- subtitle donor -->
            <h3 class="subtitle-donor-h2" style="color: hsl(35,100%,50%)">Donor(Visitor)</h3>
            <!-- subtitle donor -->
            <!-- content donor -->
            <ul class="content-donor-ul">
                <li>
                    Donor(Visitor) does not need to register.
                </li>
                <li>
                    Donor can only see the posts that uploaded by non-profit organization(foundation).
                </li>
                <li>
                    Please do not click the donate button without responsibility.
                </li>
            </ul>
            <!-- content donor -->
        </div>
        <!-- donor -->
    </div>
    <!-- main body -->
@endsection
