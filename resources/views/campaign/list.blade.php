@extends('layout')

@section('title', 'Schedule Your Package Pickup Online with Shoppre - Schedule A Pickup')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')
@section('robots', 'noindex, nofollow')
@section('content')
    <section class="timeline">
        <div class="col-md-4 col-sm-offset-5">
            <br/>
            <font color="#663399">

                <h1>Campaigns List</h1>
            </font>
        </div>
        <div class="col-md-2">
            <br/>
            <br/>
            <br/>
            <a href="{{route('campaign.create')}}" class="btn btn-shoppre">+ Create Campaign</a>
            <br/>
            <br/>
        </div>
        <br/>
        <font size="4">
            <div class="container-fluid" style="background-color: whitesmoke">
                    <div class="feedback-container">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Coupon Code</th>
                                <th>Begain Date</th>
                                <th>End Date</th>
                                <th>Metabase</th>
                                <th>Github</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Coupon Code</th>
                                <th>Begain Date</th>
                                <th>End Date</th>
                                <th>Metabase</th>
                                <th>Github</th>
                                <th>Edit</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($campaigns as $campaign)
                            <tr class="data_font">
                                <td>{{$campaign->id}}</td>
                                <td>{{$campaign->name}}</td>
                                <td>{{$campaign->coupon_code}}</td>
                                <td>{{$campaign->begain_date}}</td>
                                <td>{{$campaign->end_date}}</td>
                                <td><a href="https://pulse.shoppre.com/dashboard/322?id={{$campaign->id}}" class="btn btn-shoppre">View</a></td>
                                <td><a href="https://pulse.shoppre.com/dashboard/322?id={{$campaign->github_issue_id}}" class="btn btn-shoppre">View</a></td>
                                <td><a href="{{route('campaign.edit',['id'=>$campaign->id])}}" class="btn btn-shoppre">Edit</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </font>
    </section>
@endsection

@section('js_script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
            $('#example').DataTable({
                "order": [[ 0, "desc" ]]
            });
        });
    </script>
@endsection