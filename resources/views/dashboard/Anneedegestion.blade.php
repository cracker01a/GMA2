@extends("dashboard.layouts.master")

@section('content')

<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
        <div class="flex justify-between">
            <h4>Liste des Années de gestion</h4>
            <a href="#" class="bg-blue-500 rounded-md p-4 text-white">Nouvelle Année</a>





            <div class="row">
                <div class="col-xl-11">
            
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('AjoutYear') }}"><button type="button" class="btn btn-info waves-effect waves-light" style="float: right;" >Nouvelle Année</button></a>
                            <h4 class="card-title">Année de gestion</h4>
                            

                            
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
            
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Année</th>
                                         
                                            <th>Statut</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($workYearList as $item)
                                            <tr>
                                                <th scope="row"> {{$item->id}} </th>
                                                <td> {{$item->work_year}}</td>
                                             
                                                <td>
                                                    <button type="button" class="btn btn-light btn-sm">
                                                        @if ( $item->active>=1 )
                                                            <span class="p-3 btn btn-success waves-effect waves-light">Actif</span>
                                                        @else
                                                            <span class="p-3 btn btn-danger">Inactif</span>
                                                        @endif
                                                        
                                                        
                                                        </button>
                                                    
                                                </td>
                                                <td>
                                                 
                                                  <form action="{{ route('changeStatus') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="itemId" value="{{ $item->id }}">
                                                    <button type="submit" class="p-2 btn {{ $item->active == 1 ? 'btn-danger' : 'btn-success waves-effect waves-light' }}">
                                                        {{ $item->active == 1 ? 'Rendre Inactif' : 'Rendre Actif' }}
                                                    </button>
                                                </form>
                                                
                                              
                                                </td>
                                            </tr>
                                        @empty
                                            
                                        @endforelse
                                        
                                           
                                     
                                    </tbody>
                                </table>

                                {{ $workYearList->links() }}
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            
                <!-- end col -->
            </div>
        </div>
    </div>
</div>













<!-- end row -->

@endsection