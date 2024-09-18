@extends('layouts.mainlayouts')

@section('title', 'Barang')

@section('content')

            <div class="row g-0">
                <div class="sidebar col-2 collapse d-block" id="navbarAdmin">
                    
                    <form action="" method="get">
                        <div class="sidebar col-lg-2 collapse d-block" style="width:100%;" id="navbarAdmin">
                        <input type="hidden" name="category" id="hiddenInputId">
                        @foreach ($categories as $item)
                            <button type="submit"style="width:100%; border:0;  text-align: left;"  onclick="setCategoryValue({{ $item->id }})" @if(request()->id != null) class='active' @endif>{{ $item->name }}</button>
                        @endforeach
                        </div>
                    </form>

                </div>

                <div class="content p-2 col-lg-10">

                    <div class="m-5">
                        <div class="row">
                            @foreach($products as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                <div class="card p-2 h-100 shadow" style="width: 100%; height: 100%;">
                                    <div class="card-custom6">
                                        <img src="{{  $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/no-image4.png') }}" class="card-img-top" alt="..." >
                                    </div>

                                    <div class="card-body position-relative">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <p class="card-text">Rp{{ number_format($item->price, 0, ',', '.') }}</p>
                                        @if($item->stock > 0)
                                        <a href="detailproduct/{{$item->slug}}" class="btn btn-navy">Beli</a>
                                        @else
                                            <p class="text-danger position-absolute top-0 end-0 fw-bold">Habis</p>
                                            <a href="detailproduct/{{$item->slug}}" class="btn btn-secondary disabled">Beli</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            
                        </div>
                    </div>   
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        @if ($products->hasPages())
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($products->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link text-white" style="background: #173551;">«</span></li>
                                @else
                                    <li class="page-item"><a class="page-link text-dark" href="{{ $products->previousPageUrl() }}" rel="prev">«</a></li>
                                @endif
    
                                {{-- Page Numbers --}}
                                @foreach(range(1, $products->lastPage()) as $i)
                                    @if($i >= $products->currentPage() - 2 && $i <= $products->currentPage() + 2)
                                        @if ($i == $products->currentPage())
                                            <li class="page-item "><span class="page-link text-white" style="background: #072541;">{{ $i }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link text-dark" href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                        @endif
                                    @endif
                                @endforeach
    
                                {{-- Next Page Link --}}
                                @if ($products->hasMorePages())
                                    <li class="page-item"><a class="page-link text-dark" href="{{ $products->nextPageUrl() }}" rel="next">»</a></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link text-white" style="background: #173551;">»</span></li>
                                @endif
                            </ul>
                        @endif
                    </div>
                    
                    <!-- {{ $products->links('pagination::simple-bootstrap-4') }} -->
                </div>
            </div>
@endsection