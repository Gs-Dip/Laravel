<h1> Save your student data </h1>

<form action="{{ url('postdata') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="enter your name hare"> <br>
    <input type="email" name="email"  placeholder="enter your email hare"> <br>
    <input type="text" name="phon" placeholder="enter your phon"> <br>
    <button type="submit">Submit</button>
</form>