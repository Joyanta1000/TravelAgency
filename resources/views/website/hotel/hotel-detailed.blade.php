@extends('website.default.layout')

@section('content')

<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">Hotel Detailed</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">HOME</a></li>
            <li class="active">Hotel Detailed</li>
        </ul>
    </div>
</div>
<section id="content">
    <div class="container">
        <div class="row">
            <div id="main" class="col-md-9">
                <div class="tab-container style1" id="hotel-main-content">
                    <ul class="tabs">
                        <li class="active"><a data-toggle="tab" href="#photos-tab">photos</a></li>
                        <li><a data-toggle="tab" href="#map-tab">map</a></li>
                        <li><a data-toggle="tab" href="#steet-view-tab">street view</a></li>
                        <li><a data-toggle="tab" href="#calendar-tab">calendar</a></li>
                        <li class="pull-right"><a class="button btn-small yellow-bg white-color" href="#">TRAVEL GUIDE</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="photos-tab" class="tab-pane fade in active">
                            <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">
                                <ul class="slides">
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                    <li><img src="http://placehold.it/900x500" alt="" /></li>
                                </ul>
                            </div>
                            <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">
                                <ul class="slides">
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                </ul>
                            </div>
                        </div>
                        <div id="map-tab" class="tab-pane fade">

                        </div>
                        <div id="steet-view-tab" class="tab-pane fade" style="height: 500px;">

                        </div>
                        <div id="calendar-tab" class="tab-pane fade">
                            <label>SELECT MONTH</label>
                            <div class="col-sm-6 col-md-4 no-float no-padding">
                                <div class="selector">
                                    <select class="full-width" id="select-month">
                                        <option value="2014-6">June 2014</option>
                                        <option value="2014-7">July 2014</option>
                                        <option value="2014-8">August 2014</option>
                                        <option value="2014-9">September 2014</option>
                                        <option value="2014-10">October 2014</option>
                                        <option value="2014-11">November 2014</option>
                                        <option value="2014-12">December 2014</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="calendar"></div>
                                    <div class="calendar-legend">
                                        <label class="available">available</label>
                                        <label class="unavailable">unavailable</label>
                                        <label class="past">past</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p class="description">
                                        The calendar is updated every five minutes and is only an approximation of availability.
                                        <br /><br />
                                        Some hosts set custom pricing for certain days on their calendar, like weekends or holidays. The rates listed are per day and do not include any cleaning fee or rates for extra people the host may have for this listing. Please refer to the listing's Description tab for more details.
                                        <br /><br />
                                        We suggest that you contact the host to confirm availability and rates before submitting a reservation request.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="hotel-features" class="tab-container">
                    <ul class="tabs">


                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button> -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Invoice Verification</h5>
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> -->
                                    </div>
                                    <div class="modal-body">
                                        <label for="">Invoice No</label>
                                        <div id="message">

                                        </div>
                                        <input class="form-control" type="text" name="" id = "invoice"/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary verify">Verify</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <li id="check" class="active"><a href="#hotel-description" data-toggle="tab">Description</a></li>
                        <li><a href="#hotel-availability" data-toggle="tab">Availability</a></li>
                        <li><a href="#hotel-amenities" data-toggle="tab">Amenities</a></li>
                        <li><a href="#hotel-reviews" data-toggle="tab">Reviews</a></li>
                        <li><a href="#hotel-faqs" data-toggle="tab">FAQs</a></li>
                        <li><a href="#hotel-things-todo" data-toggle="tab">Things to Do</a></li>
                        <li id="checkToReview"class="" ><a href="#hotel-write-review" type="button" data-toggle="modal" data-target="#exampleModal">Write a Review</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="istTab tab-pane fade in active" id="hotel-description">
                            <div class="intro table-wrapper full-width hidden-table-sms">
                                <div class="col-sm-5 col-lg-4 features table-cell">
                                    <ul>
                                        <li><label>hotel type:</label>4 star</li>
                                        <li><label>Extra people:</label>No Charge</li>
                                        <li><label>Minimum Stay:</label>2 nights</li>
                                        <li><label>Security Deposit:</label>$279</li>
                                        <li><label>Country:</label>France</li>
                                        <li><label>City:</label>Paris</li>
                                        <li><label>Neighborhood:</label>République</li>
                                        <li><label>Cancellation:</label>strict</li>
                                    </ul>
                                </div>
                                <div class="col-sm-7 col-lg-8 table-cell testimonials">
                                    <div class="testimonial style1">
                                        <ul class="slides ">
                                            <li>
                                                <p class="description">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories. Thanks for great experience.</p>
                                                <div class="author clearfix">
                                                    <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                                    <h5 class="name">Jessica Brown<small>guest</small></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <p class="description">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories. Thanks for great experience.</p>
                                                <div class="author clearfix">
                                                    <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                                    <h5 class="name">Lisa Kimberly<small>guest</small></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <p class="description">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories. Thanks for great experience.</p>
                                                <div class="author clearfix">
                                                    <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                                    <h5 class="name">Jessica Brown<small>guest</small></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="long-description">
                                <h2>About Hilton Hotel and Resorts</h2>
                                <p>
                                    Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.
                                    <br /><br />
                                    Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla sem, vel egestas dui ullamcorper ac.
                                    <br /><br />
                                    Sed scelerisque lectus sit amet faucibus sodales. Proin ut risus tortor. Etiam fermentum tellus auctor, fringilla sapien et, congue quam. In a luctus tortor. Suspendisse eget tempor libero, ut sollicitudin ligula. Nulla vulputate tincidunt est non congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus at est imperdiet, dapibus ipsum vel, lacinia nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus id interdum lectus, ut elementum elit. Nullam a molestie magna. Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotel-availability">
                            <div class="update-search clearfix">
                                <div class="col-md-5">
                                    <h4 class="title">When</h4>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>CHECK IN</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" placeholder="mm/dd/yy" class="input-text full-width" />
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>CHECK OUT</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" placeholder="mm/dd/yy" class="input-text full-width" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h4 class="title">Who</h4>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>ROOMS</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <label>ADULTS</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <label>KIDS</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <h4 class="visible-md visible-lg">&nbsp;</h4>
                                    <label class="visible-md visible-lg">&nbsp;</label>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button data-animation-duration="1" data-animation-type="bounce" class="full-width icon-check animated" type="submit">SEARCH NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Available Rooms</h2>
                            <div class="room-list listing-style3 hotel">
                                <article class="box">
                                    <figure class="col-sm-4 col-md-3">
                                        <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="160" src="http://placehold.it/230x160" alt=""></a>
                                    </figure>
                                    <div class="details col-xs-12 col-sm-8 col-md-9">
                                        <div>
                                            <div>
                                                <div class="box-title">
                                                    <h4 class="title">Standard Family Room</h4>
                                                    <dl class="description">
                                                        <dt>Max Guests:</dt>
                                                        <dd>3 persons</dd>
                                                    </dl>
                                                </div>
                                                <div class="amenities">
                                                    <i class="soap-icon-wifi circle"></i>
                                                    <i class="soap-icon-fitnessfacility circle"></i>
                                                    <i class="soap-icon-fork circle"></i>
                                                    <i class="soap-icon-television circle"></i>
                                                </div>
                                            </div>
                                            <div class="price-section">
                                                <span class="price"><small>PER/NIGHT</small>$121</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                            <div class="action-section">
                                                <a href="hotel-booking.html" title="" class="button btn-small full-width text-center">BOOK NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure class="col-sm-4 col-md-3">
                                        <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="160" src="http://placehold.it/230x160" alt=""></a>
                                    </figure>
                                    <div class="details col-xs-12 col-sm-8 col-md-9">
                                        <div>
                                            <div>
                                                <div class="box-title">
                                                    <h4 class="title">Superior Double Room</h4>
                                                    <dl class="description">
                                                        <dt>Max Guests:</dt>
                                                        <dd>5 persons</dd>
                                                    </dl>
                                                </div>
                                                <div class="amenities">
                                                    <i class="soap-icon-wifi circle"></i>
                                                    <i class="soap-icon-fitnessfacility circle"></i>
                                                    <i class="soap-icon-fork circle"></i>
                                                    <i class="soap-icon-television circle"></i>
                                                </div>
                                            </div>
                                            <div class="price-section">
                                                <span class="price"><small>PER/NIGHT</small>$241</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                            <div class="action-section">
                                                <a href="hotel-booking.html" title="" class="button btn-small full-width text-center">BOOK NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure class="col-sm-4 col-md-3">
                                        <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="160" src="http://placehold.it/230x160" alt=""></a>
                                    </figure>
                                    <div class="details col-xs-12 col-sm-8 col-md-9">
                                        <div>
                                            <div>
                                                <div class="box-title">
                                                    <h4 class="title">Deluxe Single Room</h4>
                                                    <dl class="description">
                                                        <dt>Max Guests:</dt>
                                                        <dd>4 persons</dd>
                                                    </dl>
                                                </div>
                                                <div class="amenities">
                                                    <i class="soap-icon-wifi circle"></i>
                                                    <i class="soap-icon-fitnessfacility circle"></i>
                                                    <i class="soap-icon-fork circle"></i>
                                                    <i class="soap-icon-television circle"></i>
                                                </div>
                                            </div>
                                            <div class="price-section">
                                                <span class="price"><small>PER/NIGHT</small>$137</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                            <div class="action-section">
                                                <a href="hotel-booking.html" title="" class="button btn-small full-width text-center">BOOK NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure class="col-sm-4 col-md-3">
                                        <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="160" src="http://placehold.it/230x160" alt=""></a>
                                    </figure>
                                    <div class="details col-xs-12 col-sm-8 col-md-9">
                                        <div>
                                            <div>
                                                <div class="box-title">
                                                    <h4 class="title">Single Bed Room</h4>
                                                    <dl class="description">
                                                        <dt>Max Guests:</dt>
                                                        <dd>2 persons</dd>
                                                    </dl>
                                                </div>
                                                <div class="amenities">
                                                    <i class="soap-icon-wifi circle"></i>
                                                    <i class="soap-icon-fitnessfacility circle"></i>
                                                    <i class="soap-icon-fork circle"></i>
                                                    <i class="soap-icon-television circle"></i>
                                                </div>
                                            </div>
                                            <div class="price-section">
                                                <span class="price"><small>PER/NIGHT</small>$55</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                            <div class="action-section">
                                                <a href="hotel-booking.html" title="" class="button btn-small full-width text-center">BOOK NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <a href="#" class="load-more button full-width btn-large fourty-space">LOAD MORE ROOMS</a>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="hotel-amenities">
                            <h2>Amenities Style 01</h2>

                            <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                            <ul class="amenities clearfix style1">
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-wifi"></i>WI_FI</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-swimming"></i>swimming pool</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-television"></i>television</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-coffee"></i>coffee</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-aircon"></i>air conditioning</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-fitnessfacility"></i>fitness facility</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-fridge"></i>fridge</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-winebar"></i>wine bar</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-smoking"></i>smoking allowed</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-entertainment"></i>entertainment</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-securevault"></i>secure vault</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-pickanddrop"></i>pick and drop</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-phone"></i>room service</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-pets"></i>pets allowed</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-playplace"></i>play place</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-breakfast"></i>complimentary breakfast</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-parking"></i>Free parking</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-conference"></i>conference room</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-fireplace"></i>fire place</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-handicapaccessiable"></i>Handicap Accessible</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-doorman"></i>Doorman</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-tub"></i>Hot Tub</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-elevator"></i>Elevator in Building</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style1"><i class="soap-icon-star"></i>Suitable for Events</div>
                                </li>
                            </ul>
                            <br />

                            <h2>Amenities Style 02</h2>
                            <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                            <ul class="amenities clearfix style2">
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-wifi circle"></i>WI_FI</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-swimming circle"></i>swimming pool</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-television circle"></i>television</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-coffee circle"></i>coffee</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-aircon circle"></i>air conditioning</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-fitnessfacility circle"></i>fitness facility</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-fridge circle"></i>fridge</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-winebar circle"></i>wine bar</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-smoking circle"></i>smoking allowed</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-entertainment circle"></i>entertainment</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-securevault circle"></i>secure vault</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-pickanddrop circle"></i>pick and drop</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-phone circle"></i>room service</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-pets circle"></i>pets allowed</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-playplace circle"></i>play place</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-breakfast circle"></i>complimentary breakfast</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-parking circle"></i>Free parking</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-conference circle"></i>conference room</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-fireplace circle"></i>fire place</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-handicapaccessiable circle"></i>Handicap Accessible</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-doorman circle"></i>Doorman</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-tub circle"></i>Hot Tub</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-elevator circle"></i>Elevator in Building</div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="icon-box style2"><i class="soap-icon-star circle"></i>Suitable for Events</div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="hotel-reviews">
                            <div class="intro table-wrapper full-width hidden-table-sms">
                                <div class="rating table-cell col-sm-4">
                                    <span class="score">{{number_format($res->first()->review->avg('review'), 1)}}/5.0</span>
                                    <div class="five-stars-container">
                                        @php
                                        $star = 20 * number_format($res->first()->review->avg('review'), 1);
                                        @endphp

                                        <div class="five-stars" style="width: {{$star}}%;"></div>
                                    </div>


                                    <a href="#" class="goto-writereview-pane button green btn-small full-width" type="button" data-toggle="modal" data-target="#exampleModal">WRITE A REVIEW</a>
                                </div>
                                <div class="table-cell col-sm-8">
                                    <div class="detailed-rating">
                                        <ul class="clearfix">
                                            @foreach($categories_reviews as $key => $value)

                                            <li class="col-md-6">
                                                <!-- @php
                                                $star_1 = 20 * number_format($res->first()->review->where('category_id', 1)->avg('review'), 1);
                                                @endphp -->
                                                @php
                                                $star_1 = 20 * number_format($value, 1);
                                                @endphp

                                                <div class="each-rating"><label>{{App\ReviewCategory::find($key)->category}}</label>
                                                    <div class="five-stars-container">
                                                        <div class="five-stars" style="width: {{$star_1}}%;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="guest-reviews">
                                <h2>Guest Reviews</h2>
                                <div class="guest-review table-wrapper">
                                    <div class="col-xs-3 col-md-2 author table-cell">
                                        <a href="#"><img src="http://placehold.it/270x263" alt="" width="270" height="263" /></a>
                                        <p class="name">Jessica Brown</p>
                                        <p class="date">NOV, 12, 2013</p>
                                    </div>
                                    <div class="col-xs-9 col-md-10 table-cell comment-container">
                                        <div class="comment-header clearfix">
                                            <h4 class="comment-title">We had great experience while our stay and Hilton Hotels!</h4>
                                            <div class="review-score">
                                                <div class="five-stars-container">
                                                    <div class="five-stars" style="width: 80%;"></div>
                                                </div>
                                                <span class="score">4.0/5.0</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="guest-review table-wrapper">
                                    <div class="col-xs-3 col-md-2 author table-cell">
                                        <a href="#"><img src="http://placehold.it/270x263" alt="" width="270" height="263" /></a>
                                        <p class="name">David Jhon</p>
                                        <p class="date">NOV, 12, 2013</p>
                                    </div>
                                    <div class="col-xs-9 col-md-10 table-cell comment-container">
                                        <div class="comment-header clearfix">
                                            <h4 class="comment-title">I love the speediness of their services.</h4>
                                            <div class="review-score">
                                                <div class="five-stars-container">
                                                    <div class="five-stars" style="width: 64%;"></div>
                                                </div>
                                                <span class="score">3.2/5.0</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="guest-review table-wrapper">
                                    <div class="col-xs-3 col-md-2 author table-cell">
                                        <a href="#"><img src="http://placehold.it/270x263" alt="" width="270" height="263" /></a>
                                        <p class="name">Kyle Martin</p>
                                        <p class="date">NOV, 12, 2013</p>
                                    </div>
                                    <div class="col-xs-9 col-md-10 table-cell comment-container">
                                        <div class="comment-header clearfix">
                                            <h4 class="comment-title">When you look outside from the windows its breath taking.</h4>
                                            <div class="review-score">
                                                <div class="five-stars-container">
                                                    <div class="five-stars" style="width: 76%;"></div>
                                                </div>
                                                <span class="score">3.8/5.0</span>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="button full-width btn-large">LOAD MORE REVIEWS</a>
                        </div>
                        <div class="tab-pane fade" id="hotel-faqs">
                            <h2>Frquently Asked Questions</h2>
                            <div class="topics">
                                <ul class="check-square clearfix">
                                    <li class="col-sm-6 col-md-4"><a href="#">address &amp; map</a></li>
                                    <li class="col-sm-6 col-md-4"><a href="#">messaging</a></li>
                                    <li class="col-sm-6 col-md-4"><a href="#">refunds</a></li>
                                    <li class="col-sm-6 col-md-4"><a href="#">pricing</a></li>
                                    <li class="col-sm-6 col-md-4 active"><a href="#">reservation requests</a></li>
                                    <li class="col-sm-6 col-md-4"><a href="#">your reservation</a></li>
                                </ul>
                            </div>
                            <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                            <div class="toggle-container">
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#question1" data-toggle="collapse">How do I know a reservation is accepted or confirmed?</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="question1">
                                        <div class="panel-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#question2" data-toggle="collapse">What do I do after I receive a reservation request from a guest?</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="question2">
                                        <div class="panel-content">
                                            <p>Sed a justo enim. Vivamus volutpat ipsum ultrices augue porta lacinia. Proin in elementum enim. <span class="skin-color">Duis suscipit justo</span> non purus consequat molestie. Etiam pharetra ipsum sagittis sollicitudin ultricies. Praesent luctus, diam ut tempus aliquam, diam ante euismod risus, euismod viverra quam quam eget turpis. Nam <span class="skin-color">tristique congue</span> arcu, id bibendum diam. Ut hendrerit, leo a pellentesque porttitor, purus arcu tristique erat, in faucibus elit leo in turpis vitae luctus enim, a mollis nulla.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a class="" href="#question3" data-toggle="collapse">How much time do I have to respond to a reservation request?</a>
                                    </h4>
                                    <div class="panel-collapse collapse in" id="question3">
                                        <div class="panel-content">
                                            <p>Sed a justo enim. Vivamus volutpat ipsum ultrices augue porta lacinia. Proin in elementum enim. <span class="skin-color">Duis suscipit justo</span> non purus consequat molestie. Etiam pharetra ipsum sagittis sollicitudin ultricies. Praesent luctus, diam ut tempus aliquam, diam ante euismod risus, euismod viverra quam quam eget turpis. Nam <span class="skin-color">tristique congue</span> arcu, id bibendum diam. Ut hendrerit, leo a pellentesque porttitor, purus arcu tristique erat, in faucibus elit leo in turpis vitae luctus enim, a mollis nulla.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#question4" data-toggle="collapse">Why can’t I call or email hotel or host before booking?</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="question4">
                                        <div class="panel-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#question5" data-toggle="collapse">Am I allowed to decline reservation requests?</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="question5">
                                        <div class="panel-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#question6" data-toggle="collapse">What happens if I let a reservation request expire?</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="question6">
                                        <div class="panel-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#question7" data-toggle="collapse">How do I set reservation requirements?</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="question7">
                                        <div class="panel-content">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotel-things-todo">
                            <h2>Things to Do</h2>
                            <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                            <div class="activities image-box style2 innerstyle">
                                <article class="box">
                                    <figure>
                                        <a title="" href="#"><img width="250" height="161" alt="" src="http://placehold.it/250x160"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="details-header">
                                            <div class="review-score">
                                                <div class="five-stars-container">
                                                    <div style="width: 60%;" class="five-stars"></div>
                                                </div>
                                                <span class="reviews">25 reviews</span>
                                            </div>
                                            <h4 class="box-title">Central Park Walking Tour</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                        <a class="button" title="" href="#">MORE</a>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure>
                                        <a title="" href="#"><img width="250" height="161" alt="" src="http://placehold.it/250x160"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="details-header">
                                            <div class="review-score">
                                                <div class="five-stars-container">
                                                    <div style="width: 60%;" class="five-stars"></div>
                                                </div>
                                                <span class="reviews">25 reviews</span>
                                            </div>
                                            <h4 class="box-title">Museum of Modern Art</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                        <a class="button" title="" href="#">MORE</a>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure>
                                        <a title="" href="#"><img width="250" height="161" alt="" src="http://placehold.it/250x160"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="details-header">
                                            <div class="review-score">
                                                <div class="five-stars-container">
                                                    <div style="width: 60%;" class="five-stars"></div>
                                                </div>
                                                <span class="reviews">25 reviews</span>
                                            </div>
                                            <h4 class="box-title">Crazy Horse Cabaret Show</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                        <a class="button" title="" href="#">MORE</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="write tab-pane fade" id="hotel-write-review">
                            <div class="main-rating table-wrapper full-width hidden-table-sms intro">
                                <article class="image-box box hotel listing-style1 photo table-cell col-sm-4">
                                    <figure>
                                        <a class="hover-effect" title="" href="#"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">{{$res->first()->name}}<small><i class="soap-icon-departure"></i> Paris, france</small></h4>
                                        <div class="feedback">
                                            @php
                                            $star_write = 20 * number_format($res->first()->review->avg('review'), 1);
                                            @endphp
                                            <div title="{{number_format($res->first()->review->avg('review'), 1)}} stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: {{$star_write}}%;"></span></div>
                                            <span class="review">{{$res->first()->review->count()}} reviews</span>
                                        </div>
                                    </div>
                                </article>
                                <div class="table-cell col-sm-8">
                                    <div class="overall-rating">
                                        <h4>Your overall Rating of this property</h4>
                                        <div class="star-rating clearfix">
                                            <div class="five-stars-container">
                                                @php
                                                $star_write_own = 20 * number_format($res->first()->review->where('reviewed_by', 1)->avg('review'), 1);
                                                @endphp
                                                <div class="five-stars" style="width: {{$star_write_own}}%;"></div>
                                            </div>
                                            <span class="status">{{number_format($res->first()->review->where('reviewed_by', 1)->avg('review'), 1) >= 4 ? 'VERY GOOD' : (number_format($res->first()->review->where('reviewed_by', 1)->avg('review'), 1) <= 2 ? 'BAD' : 'GOOD') }}</span>
                                        </div>
                                        <div class="detailed-rating">
                                            <ul class="clearfix">
                                                @foreach($categories_reviews_own as $key => $value)

                                                <li class="col-md-6">

                                                    <div class="each-rating"><label>{{App\ReviewCategory::find($key)->category}}</label>
                                                        <div id="textbox" class="five-stars-container editable-rating" data-original-stars="{{ number_format($value, 1) }}"></div>

                                                        <!-- <div> -->
                                                        <!-- <input name="review[]" class="rating rating--nojs" max="5" step="1" type="range" value="{{ number_format($value, 1) }}"> -->
                                                        <!-- <label class="rating-label"><strong>“Half stars” using <code>step="0.5"</code></strong> -->
                                                        <!-- <input class="rating" max="5" oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5" style="--value:{{ number_format($value, 1) }}" type="range" value="{{ number_format($value, 1) }}"> -->
                                                        <!-- </label> -->
                                                        <!-- </div> -->
                                                        <!-- <div class="rating">
                                                            <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                                                            <label for="star5">☆</label>
                                                            <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                                                            <label for="star4">☆</label>
                                                            <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                                                            <label for="star3">☆</label>
                                                            <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                                                            <label for="star2">☆</label>
                                                            <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                                                            <label for="star1">☆</label>
                                                            <div class="clear"></div>
                                                        </div> -->
                                                    </div>

                                                </li>

                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="review-form">
                                <div class="form-group col-md-5 no-float no-padding">
                                    <h4 class="title">Title of your review</h4>
                                    <input type="text" name="review-title" class="input-text full-width" value="" placeholder="enter a review title" />
                                </div>
                                <div class="form-group">
                                    <h4 class="title">Your review</h4>
                                    <textarea class="input-text full-width" placeholder="enter your review (minimum 200 characters)" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="title">What sort of Trip was this?</h4>
                                    <ul class="sort-trip clearfix">
                                        <li><a href="#"><i class="soap-icon-businessbag circle"></i></a><span>Business</span></li>
                                        <li><a href="#"><i class="soap-icon-couples circle"></i></a><span>Couples</span></li>
                                        <li><a href="#"><i class="soap-icon-family circle"></i></a><span>Family</span></li>
                                        <li><a href="#"><i class="soap-icon-friends circle"></i></a><span>Friends</span></li>
                                        <li><a href="#"><i class="soap-icon-user circle"></i></a><span>Solo</span></li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-5 no-float no-padding">
                                    <h4 class="title">When did you travel?</h4>
                                    <div class="selector">
                                        <select class="full-width">
                                            <option value="2014-6">June 2014</option>
                                            <option value="2014-7">July 2014</option>
                                            <option value="2014-8">August 2014</option>
                                            <option value="2014-9">September 2014</option>
                                            <option value="2014-10">October 2014</option>
                                            <option value="2014-11">November 2014</option>
                                            <option value="2014-12">December 2014</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h4 class="title">Add a tip to help travelers choose a good room</h4>
                                    <textarea class="input-text full-width" rows="3" placeholder="write something here"></textarea>
                                </div>
                                <div class="form-group col-md-5 no-float no-padding">
                                    <h4 class="title">Do you have photos to share? <small>(Optional)</small> </h4>
                                    <div class="fileinput full-width">
                                        <input type="file" class="input-text" data-placeholder="select image/s" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h4 class="title">Share with friends <small>(Optional)</small></h4>
                                    <p>Share your review with your friends on different social media networks.</p>
                                    <ul class="social-icons icon-circle clearfix">
                                        <li class="twitter"><a title="Twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                        <li class="facebook"><a title="Facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                        <li class="googleplus"><a title="GooglePlus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                        <li class="pinterest"><a title="Pinterest" href="#" data-toggle="tooltip"><i class="soap-icon-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-5 no-float no-padding no-margin">
                                    <button type="submit" class="btn-large full-width">SUBMIT REVIEW</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <div class="sidebar col-md-3">
                <article class="detailed-logo">
                    <figure>
                        <img width="114" height="85" src="http://placehold.it/114x85" alt="">
                    </figure>
                    <div class="details">
                        <h2 class="box-title">Hilton Hotel and Resorts<small><i class="soap-icon-departure yellow-color"></i><span class="fourty-space">Bastille, Paris france</span></small></h2>
                        <span class="price clearfix">
                            <small class="pull-left">avg/night</small>
                            <span class="pull-right">$620</span>
                        </span>
                        <div class="feedback clearfix">
                            <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: 80%;"></span></div>
                            <span class="review pull-right">270 reviews</span>
                        </div>
                        <p class="description">Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                        <a class="button yellow full-width uppercase btn-small">add to wishlist</a>
                    </div>
                </article>
                <div class="travelo-box contact-box">
                    <h4>Need Travelo Help?</h4>
                    <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                    <address class="contact-details">
                        <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                        <br>
                        <a class="contact-email" href="#">help@travelo.com</a>
                    </address>
                </div>
                <div class="travelo-box">
                    <h4>Similar Listings</h4>
                    <div class="image-box style14">
                        <article class="box">
                            <figure>
                                <a href="#"><img src="http://placehold.it/63x59" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="#">Plaza Tour Eiffel</a></h5>
                                <label class="price-wrapper">
                                    <span class="price-per-unit">$170</span>avg/night
                                </label>
                            </div>
                        </article>
                        <article class="box">
                            <figure>
                                <a href="#"><img src="http://placehold.it/63x59" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="#">Sultan Gardens</a></h5>
                                <label class="price-wrapper">
                                    <span class="price-per-unit">$620</span>avg/night
                                </label>
                            </div>
                        </article>
                        <article class="box">
                            <figure>
                                <a href="#"><img src="http://placehold.it/63x59" alt="" /></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="#">Park Central</a></h5>
                                <label class="price-wrapper">
                                    <span class="price-per-unit">$322</span>avg/night
                                </label>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="travelo-box book-with-us-box">
                    <h4>Why Book with us?</h4>
                    <ul>
                        <li>
                            <i class="soap-icon-hotel-1 circle"></i>
                            <h5 class="title"><a href="#">135,00+ Hotels</a></h5>
                            <p>Nunc cursus libero pur congue arut nimspnty.</p>
                        </li>
                        <li>
                            <i class="soap-icon-savings circle"></i>
                            <h5 class="title"><a href="#">Low Rates &amp; Savings</a></h5>
                            <p>Nunc cursus libero pur congue arut nimspnty.</p>
                        </li>
                        <li>
                            <i class="soap-icon-support circle"></i>
                            <h5 class="title"><a href="#">Excellent Support</a></h5>
                            <p>Nunc cursus libero pur congue arut nimspnty.</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection