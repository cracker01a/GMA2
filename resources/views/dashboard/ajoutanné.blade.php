@extends("dashboard.layouts.master")

@section('content')







    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                    <p class="card-title-desc"></p>
                </div>
                <div class="card-body p-4">
                    
      
                    <div class="container">
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Insérer votre nouvelle année </h5>
                                <form action="/submit" method="post">
                                    @csrf
                                    <div class="row gx-3 gy-2 align-items-center">
                                        <div class="hstack gap-3">
                                            <input class="form-control me-auto" type="text" id="annee" name="annee" value="{{ old('annee') }}" placeholder="Ajouter votre nouvelle année ici...">
                                            @error('annee')
                                                 <div class="p-2">
                                                    <div class="text-danger ">{{ $message }}</div>
                                                 </div>
                                            @enderror
                                            <a href="{{ route('WorkYear') }}"><button type="button"class="btn btn-outline-danger">Annuler</button></a>
                                            <div class="vr"></div>
                                            <button type="submit" class="btn btn-info">Ajouter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Form Layout -->
</form>
                            

 







<!-- end row -->

@endsection