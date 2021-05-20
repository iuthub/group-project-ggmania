<div class="container">
    @if(Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message_sent')}}

        </div>
        @endif
    <form method="post" action="{{route('feedback')}}">

        @csrf
        <label for="fname">First Name</label>
        <input type="text" name="Name" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" name="Surname" placeholder="Your last name..">

        <label for="email">Email</label>
        <input type="text" name="Mail" placeholder="Your email">


        <label for="Write">Subject</label>

        <textarea name="FeedbackContent" placeholder="Write something.."></textarea>

        <input type="submit" value="Submit">

    </form>
</div>
