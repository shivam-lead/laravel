

<div class="col-lg-3" >
    <div class="home-sidebar" style="position: sticky;">
        <div class="sidebar1" >
           <h3><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}" >Tell us more about yourself</a></h3>
            <a class="{{ request()->is('small-business') ? 'active' : '' }} mt-1" href="{{url('/small-business')}}">I`m a small business</a>
            <a class="{{ request()->is('business-unit') ? 'active' : '' }} mt-1" href="{{url('/business-unit')}}">CFOs & leaders</a>
            <a class="{{ request()->is('private-client') ? 'active' : '' }} mt-1" href="{{url('/private-client')}}">I’m a private client</a>
            <a class="{{ request()->is('field-in-finance') ? 'active' : '' }} mt-1" href="{{url('/field-in-finance')}}">My field is Nonprofit business.</a>
             <h3><a class="mt-2" href="#" >What can we optimyze?</a></h3>
            <a class="{{ request()->is('optimize/doing-business') ? 'active' : '' }} mt-1" href="{{url('/optimize/doing-business')}}">Cost of doing business</a>
            <a class="{{ request()->is('optimize/rising-tax') ? 'active' : '' }} mt-1" href="{{url('/optimize/rising-tax')}}">Unlock your business value </a>
            <a class="{{ request()->is('optimize/rising-capital') ? 'active' : '' }} mt-1" href="{{url('/optimize/rising-capital')}}">Drive business performance</a>
            <a class="{{ request()->is('optimize/need-tex') ? 'active' : '' }} mt-1" href="{{url('/optimize/need-tex')}}">Gain financial control</a>
            <a class="{{ request()->is('optimize/audit') ? 'active' : '' }} mt-1" href="{{url('/optimize/audit')}}">Raise capital </a>
            <a class="{{ request()->is('optimize/accounting') ? 'active' : '' }} mt-1" href="{{url('/optimize/accounting')}}">Tax reporting</a>
            <a class="{{ request()->is('optimize/accounting') ? 'active' : '' }} mt-1" href="{{url('/optimize/accounting')}}">Need an audit</a>
            
        </div>

    </div>

</div>
