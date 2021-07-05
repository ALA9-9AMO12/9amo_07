<form action="{{ ur1('contact-us')" method="post"›

    @csrf
    <div class="form-group"›
       <label>Name</label>
       <input type="text" name="name" class="form-contror">
    </div>

    <div class="form-group"›
       <label>E-mail</label>
       <input type="email " name="email " class="form-control">
    </div>

    <div class="form-group"›
       <label>Message</label>
       <textarea name="message_body" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
