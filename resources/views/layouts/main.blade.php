
@section('body')
<nav class="navbar navbar-ct-transparent" role="navigation-demo" id="demo-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://www.creative-tim.com">
           <div class="logo-container">
                <div class="logo">
                    <img src="assets/paper_img/new_logo.png" alt="Creative Tim Logo">
                </div>
                <div class="brand">
                    Creative Tim
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-example-2">
      <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="documentation/tutorial-components.html" class="btn btn-danger btn-simple">Components</a>
          </li>
          <!-- <li>
            <a href="tutorial.html" class="btn btn-danger btn-simple">Tutorial</a>
          </li> -->
          <li>
            <a href="http://www.creative-tim.com/product/paper-kit" target="_blank" class="btn btn-danger btn-fill">Download</a>
          </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>


<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase">Paper Kit</h1>
                <h3>Make your mark with a new design.</h3>
            </div>
    </div>

    <div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
                <h2>Basic Elements</h2>
            </div>

            <div id="buttons">
                    <div class="tim-title">
                        <h3>Buttons <br />
                            <small> Pick your colour </small>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <button href="#fakelink" class="btn">Default</button>
                            <button href="#fakelink" class="btn btn-primary">Primary</button>
                            <button href="#fakelink" class="btn btn-info">Info</button>
                            <button href="#fakelink" class="btn btn-success">Success</button>
                            <button href="#fakelink" class="btn btn-warning">Warning</button>
                            <button href="#fakelink" class="btn btn-danger">Danger</button>
                            <button href="#fakelink" class="btn btn-neutral">Neutral</button>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <button href="#fakelink" class="btn btn-fill">Default</button>
                            <button href="#fakelink" class="btn btn-fill btn-primary">Primary</button>
                            <button href="#fakelink" class="btn btn-fill btn-info">Info</button>
                            <button href="#fakelink" class="btn btn-fill btn-success">Success</button>
                            <button href="#fakelink" class="btn btn-fill btn-warning">Warning</button>
                            <button href="#fakelink" class="btn btn-fill btn-danger">Danger</button>
                            <button href="#fakelink" class="btn btn-fill btn-neutral">Neutral</button>
                        </div>
                    </div>
                    <div class="tim-title">
                        <h3><small>Pick your size</small></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <button href="#fakelink" class="btn btn-danger btn-xs">Download</button>
                            <button href="#fakelink" class="btn btn-danger btn-sm">Download</button>
                            <button href="#fakelink" class="btn btn-danger">Download</button>
                            <button href="#fakelink" class="btn btn-danger btn-lg">Download</button>
                        </div>
                    </div>
                    <div class="tim-title">
                        <h3>Links</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <button href="#fakelink" class="btn btn-simple">Default</button>
                            <button href="#fakelink" class="btn btn-simple btn-primary">Primary</button>
                            <button href="#fakelink" class="btn btn-simple btn-info">Info</button>
                            <button href="#fakelink" class="btn btn-simple btn-success">Success</button>
                            <button href="#fakelink" class="btn btn-simple btn-warning">Warning</button>
                            <button href="#fakelink" class="btn btn-simple btn-danger">Danger</button>
                            <button href="#fakelink" class="btn btn-simple btn-neutral">Neutral</button>
                        </div>
                    </div>
            </div>
            <!-- end buttons div -->

            <div id="inputs">
                <div class="tim-title">
                    <h3>Inputs</h3>
                </div>

                 <div class="row">
                        <div class="col-sm-3">
                    	<div class="form-group">
            	        	<input type="text" value="" placeholder="Inactive" class="form-control" />
                    	</div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group has-success">
                        <input type="text" value="Success" class="form-control" />
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group has-error has-feedback">
                        <input type="text" value="Error" class="form-control" />
                        <span class="fa fa-times form-control-feedback"></span>
                      </div>
                    </div>

                    <div class="col-sm-3">
                    	<div class="input-group">
                    	<!-- 	   Since the css properties cannot check the previous sibling of an element and for the design consistency we recommend to use the "input-group-addon" after the "form-control" like in this example -->
                          <input type="text" value="Group Addon" class="form-control">
                          <span class="input-group-addon"><i class="fa fa-group"></i></span>
                        </div>
                    </div>
                  </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-3">
                        <div class="tim-title">
                            <h3>Checkboxes</h3>
                        </div>

                          <label class="checkbox" for="checkbox1">
                            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                            Unchecked
                          </label>
                          <label class="checkbox" for="checkbox2">
                            <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox" checked>
                            Checked
                          </label>
                          <label class="checkbox" for="checkbox3">
                            <input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" disabled>
                            Disabled unchecked
                          </label>
                          <label class="checkbox" for="checkbox4">
                            <input type="checkbox" value="" id="checkbox4" data-toggle="checkbox" disabled checked>
                            Disabled checked
                          </label>
                    </div>

                    <div class="col-sm-3">
                        <div class="tim-title">
                            <h3>Radio Buttons</h3>
                        </div>

                           <label class="radio">
                            <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                            <i></i>Radio is off
                          </label>
                          <label class="radio">
                            <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                            <i></i>Radio is on
                          </label>

                          <label class="radio">
                            <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios3" value="option2" disabled>
                            <i></i>Disabled radio is off
                          </label>
                          <label class="radio">
                            <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios4" value="option2" checked disabled>
                            <i></i>Disabled radio is on
                          </label>

                    </div>
                </div><!--  end row -->

            </div><!--  end inputs -->

         </div>
        </div>
    </div>

    @include('layouts.footer')
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. </p>
      </div>
      <div class="modal-footer">
        <div class="left-side">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Never mind</button>
        </div>
        <div class="divider"></div>
        <div class="right-side">
            <button type="button" class="btn btn-danger btn-simple">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--    end modal -->
@endsection