<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>@lang('pages.contacts.contact-header-1')</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-info-wrap-flex">
                            <div class="con-info text-center">
                                <p class="icon-contact"><span><i class="flaticon-maps-and-flags"></i></span></p>
                                <p>@lang('pages.contacts.contact-address')</p>
                            </div>
                            <div class="con-info text-center">
                                <p class="icon-contact"><span><i class="flaticon-call-1"></i></span></p>
                                <p>@lang('pages.contacts.contact-phone-number')</p>
                            </div>
                            <div class="con-info text-center">
                                <p class="icon-contact"><span><i class="flaticon-envelope-1"></i></span></p>
                                <p><a href="#">@lang('pages.contacts.contact-mail')</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>@lang('pages.contacts.contact-header-2')</h2>
                <form action="{{route('contact_us.send')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" name="fname"
                                   value="{{old('fname')}}" id="fname" class="form-control" placeholder="@lang('pages.contacts.contact-form-name')">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" name="lname"
                                   value="{{old('lname')}}" id="lname" class="form-control" placeholder="@lang('pages.contacts.contact-form-surname')">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" name="organization"
                                   value="{{old('organization')}}" id="organization" class="form-control" placeholder="@lang('pages.contacts.contact-form-organization')">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" name="phone"
                                   value="{{old('phone')}}" id="phone" class="form-control" placeholder="@lang('pages.contacts.contact-form-phone')">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="email" name="email"
                                   value="{{old('email')}}" id="email" class="form-control" placeholder="@lang('pages.contacts.contact-form-mail')">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" name="subject"
                                   value="{{old('subject')}}" id="subject" class="form-control" placeholder="@lang('pages.contacts.contact-form-subject')">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                      placeholder="@lang('pages.contacts.contact-form-text')">{{old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="@lang('pages.buttons.apply')" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<footer id="colorlib-footer">

    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">
                            &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            <a href="http://klichofgroup.uz/" target="_blank"> KLICHOF GROUP</a>
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>
