<!-- Modal -->
{{-- NON AJAX --}}
<div class="modal fade" id="create-user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="name" aria-describedby="helpId">
    
                          @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="username" aria-describedby="helpId">
      
                            @if ($errors->has('username'))
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('username') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="e-mail" aria-describedby="helpId">
      
                            @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select class="form-control selectric" name="roles" required>
                            <option value="">- pilih level -</option>
                            @foreach($roles as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password" aria-describedby="helpId">
      
                            @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
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
    
    <div class="modal fade" id="delete-user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.destroy', 'test') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <label for="">Name</label>
                            <input disabled readonly type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <label for="">Username</label>
                                <input disabled readonly type="text" name="username" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
          
                                @if ($errors->has('username'))
                                   <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('username') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input disabled readonly type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
          
                                @if ($errors->has('email'))
                                   <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Level</label>
                                <input disabled readonly type="roles" name="roles" id="roles" class="form-control{{ $errors->has('roles') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
        
                                @if ($errors->has('roles'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('roles') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Created at</label>
                                <input disabled readonly type="text" name="created_at" id="created_at" class="form-control{{ $errors->has('created_at') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
          
                                @if ($errors->has('created_at'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('created_at') }}</strong>
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
    
    <div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.update', 'test') }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <label for="">Name</label>
                          <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
    
                          @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
      
                            @if ($errors->has('username'))
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('username') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
      
                            @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <input disabled readonly type="roles" name="roles" id="roles" class="form-control{{ $errors->has('roles') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
    
                            @if ($errors->has('roles'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('roles') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input required type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="new password" aria-describedby="helpId">
      
                            @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                            @endif
                            <small>Jika tidak mengganti password, tolong masukan kata sandi anda sekarang</small>
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