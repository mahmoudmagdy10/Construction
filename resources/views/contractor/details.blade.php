@extends('contractor.layout.app')

@section('link')
    <link rel="stylesheet" href="{{asset('css/customer/details.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    <link rel="stylesheet" href="css/project.css">

@endsection
@section('title')
    Details
@endsection

@section('profile')
  @if($users->profile_picture !== NULL)
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$users->profile_picture")}}' alt="avatar" width="40" height="40" />
  @endif
  @if($users->profile_picture == NULL)
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("image-home/profile.jpg")}}' alt="avatar" width="40" height="40" />
  @endif
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
                    <h4 style="color:#1b239fe0;font-weight:bold;">{{$prop->project->arch}}</h4>
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
                <td style="color :#f44336;">PREDICTION</td>
                <td style="color :#5a3528;font-weight: bold;">{{ number_format($prop->PREDICTION)}} $</td>
            </tr>
            <tr>
                <td>2</td>
                <td style="color :#f44336;">OverallQual</td>
                <td>{{$prop->OverallQual}}</td>
            </tr>
            <tr>
                <td>3</td>
                <td style="color :#f44336;">Neighborhood</td>
                <td>{{$prop->Neighborhood}}</td>
            </tr>
            <tr>
                <td>4</td>
                <td style="color :#f44336;">GrLivArea</td>
                <td>{{$prop->GrLivArea}}</td>
            </tr>
            <tr>
                <td>5</td>
                <td style="color :#f44336;">GarageCars</td>
                <td>{{$prop->GarageCars}}</td>
            </tr>
            <tr>
                <td>6</td>
                <td style="color :#f44336;">BsmtQual</td>
                <td>{{$prop->BsmtQual}}</td>
            </tr>
            <tr>
                <td>7</td>
                <td style="color :#f44336;">ExterQual</td>
                <td>{{$prop->ExterQual}}</td>
            </tr>
            <tr>
                <td>8</td>
                <td style="color :#f44336;">GarageArea</td>
                <td>{{$prop->GarageArea}}</td>
            </tr>
            <tr>
                <td>9</td>
                <td style="color :#f44336;">KitchenQual</td>
                <td>{{$prop->KitchenQual}}</td>
            </tr>
            <tr>
                <td>10</td>
                <td style="color :#f44336;">OverallQual</td>
                <td>{{$prop->OverallQual}}</td>
            </tr>
            <tr>
                <td>11</td>
                <td style="color :#f44336;">YearBuilt</td>
                <td>{{$prop->YearBuilt}}</td>
            </tr>
            <tr>
                <td>12</td>
                <td style="color :#f44336;">TotalBsmtSF</td>
                <td>{{$prop->TotalBsmtSF}}</td>
            </tr>
            </table>
            <table class="continue">
            <tr>
                <td>13</td>
                <td style="color :#f44336;">FirstFlrSF</td>
                <td>{{$prop->FirstFlrSF}}</td>
            </tr>
            <tr>
                <td>14</td>
                <td style="color :#f44336;">GarageFinish</td>
                <td>{{$prop->GarageFinish}}</td>
            </tr>
            <tr>
                <td>15</td>
                <td style="color :#f44336;">FullBath</td>
                <td>{{$prop->FullBath}}</td>
            </tr>
            <tr>
                <td>16</td>
                <td style="color :#f44336;">YearRemodAdd</td>
                <td>{{$prop->YearRemodAdd}}</td>
            </tr>
            <tr>
                <td>17</td>
                <td style="color :#f44336;">GarageType</td>
                <td>{{$prop->GarageType}}</td>
            </tr>
            <tr>
                <td>18</td>
                <td style="color :#f44336;">FireplaceQu</td>
                <td>{{$prop->FireplaceQu}}</td>
            </tr>
            <tr>
                <td>19</td>
                <td style="color :#f44336;">Foundation</td>
                <td>{{$prop->Foundation}}</td>
            </tr>
            <tr>
                <td>20</td>
                <td style="color :#f44336;">MSSubClass</td>
                <td>{{$prop->MSSubClass}}</td>
            </tr>
            <tr>
                <td>21</td>
                <td style="color :#f44336;">TotRmsAbvGrd</td>
                <td>{{$prop->TotRmsAbvGrd}}</td>
            </tr>
            <tr>
                <td>22</td>
                <td style="color :#f44336;">Fireplaces</td>
                <td>{{$prop->Fireplaces}}</td>
            </tr>
            <tr>
                <td>23</td>
                <td style="color :#f44336;">Created At</td>
                <td>{{$prop->created_at->format('d-m-Y h:i')}}</td>
            </tr>


            </table>
        </div>
        @endforeach
    @endisset
    </div>
</div>

@isset($users)
@foreach($props as $prop)
    <div class="slide_show">
        <?php $file_2d = $prop->project->file_path;?>
        <img class="d-block w-100" src='{{asset("files_2D/$file_2d")}}' alt="First slide">
    </div>
@endforeach
@endisset
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
@isset($comments)

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
            <hr>
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
@endisset

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