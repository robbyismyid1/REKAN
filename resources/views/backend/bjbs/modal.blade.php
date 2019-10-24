<!-- Modal -->
{{-- NON AJAX --}}
<div class="modal fade" id="create-bjbs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data BJBS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bjbs.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">No urut</label>
                      <input type="number" name="no_urut" id="no_urut" class="form-control{{ $errors->has('no_urut') ? ' is-invalid' : '' }}" placeholder="No urut" aria-describedby="helpId">

                      @if ($errors->has('no_urut'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('no_urut') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal(1)</label>
                        <input type="date" name="tanggal_1" id="tanggal_1" class="form-control{{ $errors->has('tanggal_1') ? ' is-invalid' : '' }}" placeholder="Tanggal(1)" aria-describedby="helpId">
  
                        @if ($errors->has('tanggal_1'))
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('tanggal_1') }}</strong>
                          </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control{{ $errors->has('kode') ? ' is-invalid' : '' }}" placeholder="Kode" aria-describedby="helpId">
  
                        @if ($errors->has('kode'))
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('kode') }}</strong>
                          </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="remark" id="remark" class="form-control{{ $errors->has('remark') ? ' is-invalid' : '' }}" placeholder="Remark" aria-describedby="helpId">
  
                        @if ($errors->has('remark'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('remark') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group">
                        <label for="">No. Bukti</label>
                        <input type="text" name="no_bukti" id="no_bukti" class="form-control{{ $errors->has('no_bukti') ? ' is-invalid' : '' }}" placeholder="Nomor Bukti" aria-describedby="helpId">
  
                        @if ($errors->has('no_bukti'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('no_bukti') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group">
                        <label for="">Mutasi Debit</label>
                        <input type="number" name="debit" id="debit" class="form-control{{ $errors->has('debit') ? ' is-invalid' : '' }}" placeholder="Debit" aria-describedby="helpId">
  
                        @if ($errors->has('debit'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('debit') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group">
                        <label for="">Mutasi Kredit</label>
                        <input type="number" name="kredit" id="kredit" class="form-control{{ $errors->has('kredit') ? ' is-invalid' : '' }}" placeholder="Kredit" aria-describedby="helpId">
  
                        @if ($errors->has('kredit'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('kredit') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group">
                        <label for="">Saldo</label>
                        <input type="number" name="saldo" id="saldo" class="form-control{{ $errors->has('saldo') ? ' is-invalid' : '' }}" placeholder="Saldo" aria-describedby="helpId">
  
                        @if ($errors->has('saldo'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('saldo') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group">
                        <select class="form-control selectric" name="kode_transaksi_id" required>
                            <option value="">- Kode Transaksi -</option>
                        @foreach($kode_transaksi_id as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                      </select>
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

<div class="modal fade" id="delete-bjbs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data BJBS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bjbs.destroy', 'test') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="">No urut</label>
                        <input disabled readonly type="text" name="no_urut" id="no_urut" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
                        @if ($errors->has('no_urut'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('no_urut') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                            <label for="">Tanggal(1)</label>
                            <input disabled readonly type="date" name="tanggal_1" id="tanggal_1" class="form-control{{ $errors->has('tanggal_1') ? ' is-invalid' : '' }}" placeholder="Tanggal(1)" aria-describedby="helpId">
      
                            @if ($errors->has('tanggal_1'))
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('tanggal_1') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Kode</label>
                            <input disabled readonly type="text" name="kode" id="kode" class="form-control{{ $errors->has('kode') ? ' is-invalid' : '' }}" placeholder="Kode" aria-describedby="helpId">
      
                            @if ($errors->has('kode'))
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('kode') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input disabled readonly type="text" name="remark" id="remark" class="form-control{{ $errors->has('remark') ? ' is-invalid' : '' }}" placeholder="Remark" aria-describedby="helpId">
      
                            @if ($errors->has('remark'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('remark') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                            <label for="">No. Bukti</label>
                            <input disabled readonly type="text" name="no_bukti" id="no_bukti" class="form-control{{ $errors->has('no_bukti') ? ' is-invalid' : '' }}" placeholder="Nomor Bukti" aria-describedby="helpId">
      
                            @if ($errors->has('no_bukti'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('no_bukti') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                            <label for="">Mutasi Debit</label>
                            <input disabled readonly type="number" name="debit" id="debit" class="form-control{{ $errors->has('debit') ? ' is-invalid' : '' }}" placeholder="Debit" aria-describedby="helpId">
      
                            @if ($errors->has('debit'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('debit') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                            <label for="">Mutasi Kredit</label>
                            <input disabled readonly type="number" name="kredit" id="kredit" class="form-control{{ $errors->has('kredit') ? ' is-invalid' : '' }}" placeholder="Kredit" aria-describedby="helpId">
      
                            @if ($errors->has('kredit'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('kredit') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                            <label for="">Saldo</label>
                            <input disabled readonly type="number" name="saldo" id="saldo" class="form-control{{ $errors->has('saldo') ? ' is-invalid' : '' }}" placeholder="Saldo" aria-describedby="helpId">
      
                            @if ($errors->has('saldo'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('saldo') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                            <label for="">Kode Transaksi</label>
                            <input disabled readonly type="text" name="kode_transaksi_id" id="kode_transaksi_id" class="form-control{{ $errors->has('kode_transaksi_id') ? ' is-invalid' : '' }}" placeholder="kode_transaksi_id" aria-describedby="helpId">

                            @if ($errors->has('kode_transaksi_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('kode_transaksi_id') }}</strong>
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

<div class="modal fade" id="edit-bjbs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data BJBS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bjbs.update', 'test') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="">No urut</label>
                        <input disabled readonly type="number" name="no_urut" id="no_urut" class="form-control{{ $errors->has('no_urut') ? ' is-invalid' : '' }}" placeholder="No urut" aria-describedby="helpId">
  
                        @if ($errors->has('no_urut'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('no_urut') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group">
                          <label for="">Tanggal(1)</label>
                          
                          <input type="date" name="tanggal_1" id="tanggal_1" class="form-control{{ $errors->has('tanggal_1') ? ' is-invalid' : '' }}" placeholder="Tanggal(1)" aria-describedby="helpId">
    
                          @if ($errors->has('tanggal_1'))
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tanggal_1') }}</strong>
                            </span>
                          @endif
                      </div>
                      <div class="form-group">
                          <label for="">Kode</label>
                          <input type="text" name="kode" id="kode" class="form-control{{ $errors->has('kode') ? ' is-invalid' : '' }}" placeholder="Kode" aria-describedby="helpId">
    
                          @if ($errors->has('kode'))
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('kode') }}</strong>
                            </span>
                          @endif
                      </div>
                      <div class="form-group">
                          <label for="">Keterangan</label>
                          <input type="text" name="remark" id="remark" class="form-control{{ $errors->has('remark') ? ' is-invalid' : '' }}" placeholder="Remark" aria-describedby="helpId">
    
                          @if ($errors->has('remark'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('remark') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                          <label for="">No. Bukti</label>
                          <input type="text" name="no_bukti" id="no_bukti" class="form-control{{ $errors->has('no_bukti') ? ' is-invalid' : '' }}" placeholder="Nomor Bukti" aria-describedby="helpId">
    
                          @if ($errors->has('no_bukti'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('no_bukti') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                          <label for="">Mutasi Debit</label>
                          <input type="number" name="debit" id="debit" class="form-control{{ $errors->has('debit') ? ' is-invalid' : '' }}" placeholder="Debit" aria-describedby="helpId">
    
                          @if ($errors->has('debit'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('debit') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                          <label for="">Mutasi Kredit</label>
                          <input type="number" name="kredit" id="kredit" class="form-control{{ $errors->has('kredit') ? ' is-invalid' : '' }}" placeholder="Kredit" aria-describedby="helpId">
    
                          @if ($errors->has('kredit'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('kredit') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                          <label for="">Saldo</label>
                          <input type="number" name="saldo" id="saldo" class="form-control{{ $errors->has('saldo') ? ' is-invalid' : '' }}" placeholder="Saldo" aria-describedby="helpId">
    
                          @if ($errors->has('saldo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('saldo') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Kode Transaksi</label>
                            <select class="form-control selectric" name="kode_transaksi_id" required>
                                <option value="">- Pick -</option>
                              @foreach($kode_transaksi_id as $data)
                                  <option value="{{ $data->id }}">{{ $data->nama }}</option>
                              @endforeach
                            </select>
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