@extends('layouts.page_app')

@section('title')
    {{'CURRENT DEMANDS'}}
@endsection

@section('content')
    <style>
        h3{
            color:lightcyan;
        }
        h4{
            margin:0;
        }
    </style>

    <div class="container-fluid spadding">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header h1" id="about-us">Current Demands</h1>
                </div>
            </div>
        </div>
    </div>  
 <div class="container" style="margin-top: 10px;">            
    <table class="table table-striped table-hover ">
      <thead>
          <tr class="danger">
            <th>S.No.</th>
            <th>Company Name</th>
            <th>Trade</th>
            <th>Quantity</th>
            <th>Country</th>
          </tr>
        </thead>
        @php $i=1; @endphp
        @foreach($curr_demand as $cd)
        {{-- @if($cd->title===) --}}
        <tbody>
          <tr>
            <td>{{$i}}</td>
            <td>{{$cd->title}}</td>
            <td>{{$cd->trade}}</td>
            <td>{{$cd->quantity}}</td>
            <td>{{$cd->country}}</td>
          </tr>
        </tbody>
        @php $i++;@endphp
        @endforeach
    </table> 
</div>




 @endsection
