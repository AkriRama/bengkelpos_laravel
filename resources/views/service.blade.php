@extends('layouts.mainlayouts')

@section('title','Service')

@section('content')



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <div class="body-content h-100">
            <div class="row g-0 h-100">

                <div class="content p-2 col-lg-10">

                    <div class="m-5">
                        <div class="row">
                            @foreach($services as $item)
                            <div class="col-lg-3">
                                <div class="card p-2 h-100" style="width: 100%; height: 100%;">
                                    <div class="card d-flex flex-column justify-content-center m-auto" style="width: 100%; height: 40vh; border: 0;">
                                        <img src="{{  $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/no-image4.png') }}" class="card-img-top" alt="..." >
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <p class="card-text">Rp.{{ $item->price }}</p>
                                        <a href="detailproduct/{{$item->slug}}" class="btn btn-primary" style="max-width:100%; max-height:100%;">Gosomewhere</a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            
                        </div>
                    </div>   
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        @if ($services->hasPages())
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($services->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">«</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $services->previousPageUrl() }}" rel="prev">«</a></li>
                                @endif
    
                                {{-- Page Numbers --}}
                                @foreach(range(1, $services->lastPage()) as $i)
                                    @if($i >= $services->currentPage() - 2 && $i <= $services->currentPage() + 2)
                                        @if ($i == $services->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $services->url($i) }}">{{ $i }}</a></li>
                                        @endif
                                    @endif
                                @endforeach
    
                                {{-- Next Page Link --}}
                                @if ($services->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $services->nextPageUrl() }}" rel="next">»</a></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link">»</span></li>
                                @endif
                            </ul>
                        @endif
                    </div>
                    
                    <!-- {{ $services->links('pagination::simple-bootstrap-4') }} -->
                </div>

            </div>
        </div>       

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
@endsection