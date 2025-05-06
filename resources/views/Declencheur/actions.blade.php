@extends('layouts.admin')

@section('title', 'Historiques des actions')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Historique des actions</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('signalement.index')}}">Signalements</a></li>
                    <li class="breadcrumb-item active">Historique des actions</li>
                </ol>

            </div>

        </div>
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $interventions->count() }}<sup style="font-size: 20px"></sup></h3>

                    <p>Nombre d'interventions</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>

                </div>
                <a href="{{route('Client.show',$signalement->Client->id)}}" class="small-box-footer">
                    {{$signalement->Client->designation}} <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>

        </div>


    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <div class="timeline">
                    @foreach ($interventions as $int)


                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-red">{{ $int->date_debut }} </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fa fa-tasks bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                            <h3 class="timeline-header"><a href="#">{{ $int->Title }}</a> </h3>
                            <h3 class="timeline-header"><a href="#">Site : </a> {{ $int->Signalement->Site->libelle }}
                            </h3>

                            <div style="display: none">
                                @switch($int->statut)
                                @case('Terminé')
                                {{ $var2 = 'btn btn-success'; }}
                                @break
                                @case('En cours')
                                {{ $var2 = 'btn btn-warning'; }}
                                @break
                                @case('En attendant')
                                {{ $var2 = 'btn btn-primary'; }}
                                @break
                                @default
                                {{ $var2 = 'btn btn-success'; }}
                                @endswitch
                            </div>

                            <h3 class="timeline-header"><a href="#">Statut : </a> <button type="button"
                                    class="{{ $var2 }} mb-2">
                                    {{$int->statut}} </button>
                            </h3>


                            <div class="timeline-body">
                                {{ $int->Description }}
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-sm" href="{{route('intervention.show',$int->id)}}"><i
                                        class="fa fa-info"></i></a>
                                {{-- <a class="btn btn-danger btn-sm">Delete</a> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- END timeline item -->
                    <!-- timeline item
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend
                                request</h3>
                        </div>
                    </div>
                     END timeline item -->
                    <!-- timeline item
                    <div>
                        <i class="fas fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-warning btn-sm">View comment</a>
                            </div>
                        </div>
                    </div>
                    END timeline item -->
                    <!-- timeline time label
                    <div class="time-label">
                        <span class="bg-green">3 Jan. 2014</span>
                    </div>
                    /.timeline-label -->
                    <!-- timeline item -->

                    <!-- END timeline item -->
                    <!-- timeline item -->

                    <!-- END timeline item -->
                    <div>
                        <i class="fas fa-clock bg-gray"></i>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.timeline -->

</section>


@endsection
