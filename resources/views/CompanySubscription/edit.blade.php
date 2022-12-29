



<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<form method="POST" action="{{route('comsub.update',$companysubscriptions->id)}}">
    @csrf
    @method('PATCH')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    <div class="form-group">

       <select class="form-control" id="name" name="company_name" value="{{$companysubscriptions->company_id}}">
        <option selected disabled value="0">Select Company</option>
        @foreach ($company_subs as $company )
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
        </select>


    </div>

    <div class="form-group">

        <select class="form-control" id="name" name="subscribe_name" value="{{$companysubscriptions->subscription_id}}">
            <option selected disabled  value="0">Select Subscription plan</option>
                        @foreach ($subscriptions as $subscription )
                <option value="{{$subscription->id}}">{{$subscription->name}}</option>
               @endforeach
 </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>

</div>
</div>





