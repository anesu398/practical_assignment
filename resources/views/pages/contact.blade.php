<form action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <div class="row gy-4">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="col-12">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        </div>
        <div class="col-12">
            <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </div>
</form>