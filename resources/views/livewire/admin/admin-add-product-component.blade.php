<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tambahkan Produk Baru
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Semua Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Produk</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nama Produk" class="form-control input-md" wire:model="name" wire:keyup="generateSlug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Slug Produk</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Slug Produk" class="form-control input-md" wire:model="slug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Deskripsi Singkat</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Deskripsi Singkat" wire:model="short_description"></textarea>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="col-md-4 control-label">Deskripsi</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Deskripsi" wire:model="description"></textarea>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Harga Regular</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Harga Regular" class="form-control input-md " wire:model="regular_price" />
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="col-md-4 control-label">Harga Penjualan</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Harga Penjualan" class="form-control input-md" wire:model="sale_price" />
                                </div>
                            </div> -->

                            <!-- <div class="form-group">
                                <label class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU" />
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Stok</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">Stok Tersedia</option>
                                        <option value="outofstock">Stok Habis</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="col-md-4 control-label">Fitur</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">Tidak</option>
                                        <option value="1">Iya</option>
                                    </select>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Jumlah Stok</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Kuantitas" class="form-control input-md" wire:model="quantity" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Gambar Produk</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image" />
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Kategori</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>