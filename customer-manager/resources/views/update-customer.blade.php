<form method="post" action="{{Route('customers.update', $customer->id)}}">
    @csrf
    <input type="text" name="name" value="{{$customer->name}}" placeholder="name">
    <input type="text" name="age" value="{{$customer->age}}" placeholder="age">
    <input type="text" name="email" value="{{$customer->email}}" placeholder="email">
    <button type="submit">update Customer</button>
</form>
