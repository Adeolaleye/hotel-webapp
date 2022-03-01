@extends('layouts.main2') 
@section('title','Contact')
 
@section('content')
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>Contact us</h1>
            <ol class="breadcrumb">
                <li><a href="">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>
    </div>
</div> 
<main id="contact_page_style_2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main_title  a_left">
                    <h2>Reach us now</h2>
                </div>
                <form id="contact-form-page">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <label class="control-label">Message</label>
                            <textarea class="form-control" name="message" placeholder="Your Message..."></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="button  btn_blue mt35 upper pull-right"> <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send Your Message </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-md-4">
                <div id="contact-page22">
                    <div id="google-map"></div>
                    <div id="map-canvas"></div>
                        <ul class="contact-info upper mt40">
                    <li>
                        <span class="ci_item">ADDRESS:</span>
                        Navagio Zakynthos, Greece
                    </li>
                    <li>
                        <span class="ci_item">EMAIL:</span>
                        example@site.com, contact@site.com
                    </li>
                    <li>
                        <span class="ci_item">PHONE:</span>
                        +1 (330) <strong>993-443</strong> , +1 (330) <strong>995-445</strong>
                    </li>
                    <li>
                        <span class="ci_item">FAX:</span> 
                        <strong>+1 123456780</strong>
                    </li>
                </ul>

                    <div class="social_media">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>
@endsection