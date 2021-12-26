<div class="card shadow bg-light" style="border-radius: 5px;">
    <div class="card-header bg-white text-white">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="row">
                    <div class="col">
                        <h5>Gerenciamento de tags</h5>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 ">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('tag.index') }}" class="btn btn-primary btn-sm" style="margin-left:80%;"><i class="fas fa-search-plus"></i>&nbsp;Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body bg-white" style="border-radius: 5px;">
        <form action="#" method="post" class="form">
            @csrf
            <div class="row mt-1">
                <div class="col-12 col-sm-12 col-lg-12">
                    <label for="tag">Descrição: </label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-sm-12 col-lg-12">
                    <button type="submit" class="btn btn-info btn-sm"><i class="far fa-save"></i>&nbsp;Gravar</button>
                    <button type="reset" class="btn btn-secondary btn-sm"><i class="far fa-times-circle"></i>&nbsp;Desfazer</button>
                </div>
            </div>
        </form>
    </div>
</div>

