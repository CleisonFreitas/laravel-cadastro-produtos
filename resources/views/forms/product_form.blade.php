
            <div class="row mt-1">
                <div class="col-12 col-sm-12 col-lg-12">
                    <input type="hidden" value="" name="product_id">
                    <label for="produto">Descrição: </label>
                    <input type="text" name="name" id="" value="{{ $product->name ?? old('name') }}" class="form-control" placeholder="Digite a descrição do produto">
                    @error('name')
                        <small class="text-danger">*{{ $message }}*</small>
                    @enderror
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-12 col-sm-12 col-lg-12">
                    <label for="tag">Tag:</label>
                    <select name="tag_id[]" id="choices-1" class="custom-select" multiple>
                        @if (isset($tag_old))
                            @foreach ($tag_old as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        @endif

                        @if (isset($etiqueta))
                            @foreach ($etiqueta as $etiqueta)
                                <option value="{{ $etiqueta->id }}" selected>{{ $etiqueta->name }}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-sm-12 col-lg-12">
                    <button type="submit" class="btn btn-info btn-sm"><i class="far fa-save"></i>&nbsp;Gravar</button>
                    <button type="reset" class="btn btn-secondary btn-sm"><i class="far fa-times-circle"></i>&nbsp;Desfazer</button>
                </div>
            </div>


