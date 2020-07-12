<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>контакты</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-info-wrap-flex">
                            <div class="con-info text-center">
                                <p class="icon-contact"><span><i class="flaticon-maps-and-flags"></i></span></p>
                                <p> г. Самарканд, <br> пр. Навои 51/31</p>
                            </div>
                            <div class="con-info text-center">
                                <p class="icon-contact"><span><i class="flaticon-call-1"></i></span></p>
                                <p><a href="#">+ 99898 142 26 62 <br> + 99890 224 26 62 </a></p>
                            </div>
                            <div class="con-info text-center">
                                <p class="icon-contact"><span><i class="flaticon-envelope-1"></i></span></p>
                                <p><a href="#">klichofgroup@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>связаться с нами</h2>
                <form action="{{route('contact_us.send')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" name="fname"
                                   value="{{old('fname')}}" id="fname" class="form-control" placeholder="Имя">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" name="lname"
                                   value="{{old('lname')}}" id="lname" class="form-control" placeholder="Фамилия">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" name="organization"
                                   value="{{old('organization')}}" id="organization" class="form-control" placeholder="Организация">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" name="phone"
                                   value="{{old('phone')}}" id="phone" class="form-control" placeholder="Телефон (998*********)">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="email" name="email"
                                   value="{{old('email')}}" id="email" class="form-control" placeholder="Эл. почта">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" name="subject"
                                   value="{{old('subject')}}" id="subject" class="form-control" placeholder="Тема">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                      placeholder="Текст сообщения">{{old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Оставить заявку" class="btn btn-primary">
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
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            Авторские права | <a href="https://kfgroup.uz" target="_blank">KLICHOF GROUP</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
