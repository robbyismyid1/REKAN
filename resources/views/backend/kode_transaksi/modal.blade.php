<!-- Modal -->
{{-- NON AJAX --}}
<div class="modal fade" id="create-transaksi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Kode Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kode-transaksi.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Transaksi</label>
                            <input type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">

                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="nama_kt" id="nama_kt" class="form-control{{ $errors->has('nama_kt') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
      
                            @if ($errors->has('nama_kt'))
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('nama_kt') }}</strong>
                              </span>
                            @endif
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="delete-transaksi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Kode Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kode-transaksi.destroy', 'test') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <label for="">ID</label>
                            <input disabled readonly type="text" name="id" id="id" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
                            
                            @if ($errors->has('id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Kode Transaksi</label>
                            <input disabled readonly type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
        
                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input disabled readonly type="text" name="nama_kt" id="nama_kt" class="form-control{{ $errors->has('nama_kt') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
        
                            @if ($errors->has('nama_kt'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama_kt') }}</strong>
                                </span>
                            @endif
                        </div>
                        <small>Data akan dihapus permanen!</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="edit-transaksi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Kode Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kode-transaksi.update', 'test') }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <label for="">ID</label>
                            <input disabled readonly type="text" name="id" id="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
      
                            @if ($errors->has('id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Kode Transaksi</label>
                            <input type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
        
                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
    
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="nama_kt" id="nama_kt" class="form-control{{ $errors->has('nama_kt') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
        
                            @if ($errors->has('nama_kt'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama_kt') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">Edit</button>
                </form>
                </div>
            </div>
        </div>
    </div>