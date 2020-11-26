<?php $this->title  = 'Contact' ?>
<h1>Contact Page</h1>

<form action="/contact" method="post">
    <div class="form-group">
        <label>Subject</label>
        <input type="text" name="subject" class="form-control"/>
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="text" name="email" class="form-control"/>
    </div>
    <div class="form-group">
        <label>body</label>
        <textarea name="body" class="form-control">
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>