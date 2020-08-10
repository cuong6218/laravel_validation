<div class="error-messsages">
    @if($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color: red">{{$nameError}}</p>
        @endforeach
    @endif
</div>
<form method="post" action="{{Route('customers.store')}}">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="email" placeholder="email">
    <button type="submit">Add Customer</button>
</form>
