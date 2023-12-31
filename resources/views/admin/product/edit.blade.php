@extends('admin')
@section('content')
    <script>
        const confirmAction = () => {
            const response = confirm("Are you sure you want to do that?");

            if (response) {
                alert("Ok was pressed");
            } else {
                alert("Cancel was pressed");
            }
        }
    </script>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">{{ $title }} Table</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><a href="/product" class="text-white btn btn-primary btn-sm">+
                                back</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="productNama" class="form-label">Nama Product</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama', $product->nama) }}" id="productNama"
                                        aria-describedby="emailHelp">
                                    @error('nama')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="productNama" class="form-label">Harga Product</label>
                                    <input type="number" name="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ old('harga', $product->harga) }}" id="productNama"
                                        aria-describedby="emailHelp">
                                    @error('harga')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="productNama" class="form-label">Ready?</label>
                                    <select class="form-select form-select-mb @error('is_ready') is-invalid @enderror"
                                        name="is_ready" aria-label=".form-select-sm example">
                                        <option value="1" @if ($product->is_ready == '1') selected @endif>Product
                                            Tersedia</option>
                                        <option value="0" @if ($product->is_ready == '0') selected @endif>Product
                                            Tidak Tersedia</option>
                                    </select>
                                    @error('is_ready')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="productDesc" class="form-label">Deskripsi Product</label>
                                    <input type="text" name="description"
                                        class="form-control @error('description') is-invalid @enderror"
                                        value="{{ old('description', $product->description) }}" id="productDesc"
                                        aria-describedby="emailHelp">
                                    @error('description')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="productNama" class="form-label">Jenis</label>
                                    <select class="form-select form-select-mb @error('jenis') is-invalid @enderror"
                                        name="jenis" aria-label=".form-select-sm example">
                                        <option value="makanan" @if ($product->jenis == 'makanan') selected @endif>Makanan
                                        </option>
                                        <option value="minuman" @if ($product->jenis == 'minuman') selected @endif>Minuman
                                        </option>
                                        <option value="soup" @if ($product->jenis == 'minuman') selected @endif>Soup
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="productNama" class="form-label">Categories</label>
                                    <select class="form-select form-select-mb @error('categories_id') is-invalid @enderror"
                                        name="categories_id" aria-label=".form-select-sm example">
                                        <option value="{{ $product->categories->id }}">{{ $product->categories->id }} |
                                            {{ $product->categories->nama }}</option>
                                        @forelse ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->id }} | {{ $item->nama }}
                                            </option>
                                        @empty
                                            Tidak Terdapat categori
                                        @endforelse
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="productGambar" class="form-label">Gambar</label>
                                    <input class="form-control @error('gambar') is-invalid @enderror" type="file"
                                        id="productGambar" name="gambar">
                                    @error('gambar')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
