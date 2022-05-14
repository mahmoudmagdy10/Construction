@extends('contractor.layout.app')

@section('link')
    <link rel="stylesheet" href="{{asset('css/customer/details.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Libre+Baskerville:400,700|Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    <link rel="stylesheet" href="css/project.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

@endsection

@section('content')
<div class="title">
    <div data-aos="fade-up" data-aos-delay="150" class="container">
    @isset($users)
        @foreach($props as $prop)
        <div class="projects">
                <div data-aos="fade-up" data-aos-delay="150" class="card">
                    <div class="box">
                      <div class="det">
                        <h3>Architecture</h3>
                        @if($prop->project->arch === 'Italian')
                        <div class="fram">
                          <iframe title="Petrovsky travel palace in Moscow" frameborder="0" allowfullscreen
                              mozallowfullscreen="true" webkitallowfullscreen="true"
                              allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                              execution-while-out-of-viewport execution-while-not-rendered web-share
                              src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                        </div>
                        @endif
                        @if($prop->project->arch === 'American')
                        <div class="fram">
                          <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                        </div>
                        @endif
                        @if($prop->project->arch === 'UK')
                        <div class="fram">
                          <iframe title="Ndecor Design Dokuzer İnşaat 3D" frameborder="0" allowfullscreen
                              mozallowfullscreen="true" webkitallowfullscreen="true"
                              allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                              execution-while-out-of-viewport execution-while-not-rendered web-share
                              src="https://sketchfab.com/models/e4869a806dfa4efd9d480fda16990c52/embed"> </iframe>
                        </div>
                        @endif
                      </div>
                    </div>
                </div>

        </div>
        <div class="table">
            <table>
            <tr>
                <th>#</th>
                <th>Properity</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>1</td>
                <td>PREDICTION</td>
                <td>{{$prop->PREDICTION}}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>OverallQual</td>
                <td>{{$prop->OverallQual}}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Neighborhood</td>
                <td>{{$prop->Neighborhood}}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>GrLivArea</td>
                <td>{{$prop->GrLivArea}}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>GarageCars</td>
                <td>{{$prop->GarageCars}}</td>
            </tr>
            <tr>
                <td>6</td>
                <td>BsmtQual</td>
                <td>{{$prop->BsmtQual}}</td>
            </tr>
            <tr>
                <td>7</td>
                <td>ExterQual</td>
                <td>{{$prop->ExterQual}}</td>
            </tr>
            <tr>
                <td>8</td>
                <td>GarageArea</td>
                <td>{{$prop->GarageArea}}</td>
            </tr>
            <tr>
                <td>9</td>
                <td>KitchenQual</td>
                <td>{{$prop->KitchenQual}}</td>
            </tr>
            <tr>
                <td>10</td>
                <td>OverallQual</td>
                <td>{{$prop->OverallQual}}</td>
            </tr>
            <tr>
                <td>11</td>
                <td>YearBuilt</td>
                <td>{{$prop->YearBuilt}}</td>
            </tr>
            <tr>
                <td>12</td>
                <td>TotalBsmtSF</td>
                <td>{{$prop->TotalBsmtSF}}</td>
            </tr>
            </table>
            <table class="continue">
            <tr>
                <td>13</td>
                <td>FirstFlrSF</td>
                <td>{{$prop->FirstFlrSF}}</td>
            </tr>
            <tr>
                <td>14</td>
                <td>GarageFinish</td>
                <td>{{$prop->GarageFinish}}</td>
            </tr>
            <tr>
                <td>15</td>
                <td>FullBath</td>
                <td>{{$prop->FullBath}}</td>
            </tr>
            <tr>
                <td>16</td>
                <td>YearRemodAdd</td>
                <td>{{$prop->YearRemodAdd}}</td>
            </tr>
            <tr>
                <td>17</td>
                <td>GarageType</td>
                <td>{{$prop->GarageType}}</td>
            </tr>
            <tr>
                <td>18</td>
                <td>FireplaceQu</td>
                <td>{{$prop->FireplaceQu}}</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Foundation</td>
                <td>{{$prop->Foundation}}</td>
            </tr>
            <tr>
                <td>20</td>
                <td>MSSubClass</td>
                <td>{{$prop->MSSubClass}}</td>
            </tr>
            <tr>
                <td>21</td>
                <td>TotRmsAbvGrd</td>
                <td>{{$prop->TotRmsAbvGrd}}</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Fireplaces</td>
                <td>{{$prop->Fireplaces}}</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Created At</td>
                <td>{{$prop->created_at}}</td>
            </tr>


            </table>
        </div>
        @endforeach
    @endisset
    </div>
</div>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<div class="container mb-5 mt-5">  
  <div class="card main">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center mb-5"> Comments </h3>

        <div class="row">
            @foreach($comments as $item)
          <div class="col-md-12">

            <div class="media">

              @if($item->users->profile_picture != null)
              <?php $comment_photo = $item->users->profile_picture ?>
              <img class="nested_comment rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$comment_photo")}}' alt="avatar" width="65" height="65" />
              @endif
              @if($item->users->profile_picture == null)
              <img class="nested_comment rounded-circle shadow-1-strong me-3" src='{{asset("image-home/profile.jpg")}}' alt="avatar" width="65" height="65" />
              @endif    

              <div class="media-body">
                <div class="row">
                  <div class="col-12 d-flex">
                  {{ $item->users->name }}
                    <span class="time"> {{ $item->created_at->format('M D Y h:i') }}</span>

                  </div>
                </div>		
                <p class="user-comment mb-1 content" > {{ $item->content }} </p>
                @foreach($item->replies as $reply)
                @isset($reply)
                <div class="media mt-4">

                    @if($reply->users->profile_picture !== null)
                    <?php $reply_photo = $reply->users->profile_picture ?>
                    <img class="nested_comment rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$reply_photo")}}' alt="avatar" width="65" height="65" />
                    @endif
                    @if($reply->users->profile_picture == null)
                    <img class="nested_comment rounded-circle shadow-1-strong me-3" src='{{asset("image-home/profile.jpg")}}' alt="avatar" width="65" height="65" />
                    @endif
                                   
                    <div class="media-body">
                      <div class="row">
                        <div class="col-12 d-flex">
                            <h5> {{ $reply->users->name }}  </h5>
                            <span class="time"> {{ $reply->created_at->format('M D Y h:i') }}</span>
                        </div>
                      </div>
                      <p class="user-reply mb-1 content"> {{ $reply->content }} </p>
                    </div>

                </div>
                @endisset
                @endforeach
                <!-- Add Comment -->
                <form action="{{ route('contractor.reply',$item->id) }}" method="POST">
                    @csrf
                    <div class="form-group add ">
                        <label for="exampleInputEmail1">Reply</label>
                        <textarea name ="comment" class="form-control " aria-label="With textarea"></textarea>
                        <input class="submit btn btn-primary" type="submit" value="Send">
                    </div>
                </form>
              <!-- Add Comment -->
              </div>
            </div>
            @endforeach
            <!-- Add Comment -->
            @if($num_of_comments->count() < 1 )
            <form id="form_id" action="{{ route('customer.comment',$project_id) }}" method="POST">
                @csrf
                <div class="form-group add">
                    <label for="exampleInputEmail1">Add Comment</label>
                    <textarea name ="comment" class="form-control" aria-label="With textarea"></textarea>
                    <input id="add_comment" class="submit btn btn-primary" type="submit" value="Send">
                </div>
            </form>
            @endif
            <!-- Add Comment -->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
@endsection

@section('script')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
    duration: 550,
    });
</script>
<script src=" {{asset('js/comment/reply.js')}}"></script>
<script src="node_modules/@fortawesome/fontawesome-free/js/all.js" charset="utf-8"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@endsection