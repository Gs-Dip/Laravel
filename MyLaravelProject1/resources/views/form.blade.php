<h1> form blade php </h1>

<form action=" {{ url('formData') }} " method="POST">
    @csrf       <!-- @csrf token chara form submition korte dibe na -->

    <input type="text" name="name" placeholder="Enter your name hare"> <br>
    <input type="email" name="email" placeholder="Enter your email hare">  <br>
    <button type="submit">submit</button>  

</form>