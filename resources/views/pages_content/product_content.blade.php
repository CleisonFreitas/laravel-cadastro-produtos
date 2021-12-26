<div class="card shadow" style="border-radius: 5px">
    <div class="card-header bg-white text-white">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="row">
                    <div class="col">
                        <h5>Relação de produtos cadastrados</h5>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 ">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('product.show') }}" class="btn btn-primary btn-sm" style="margin-left:80%;"><i class="fas fa-plus-circle"></i>&nbsp;Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mt-2">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-display mt-3" id="dataTable" cellspacing="0" width="100%" style="text-align:left;" >
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th>Operação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $product )
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit" title="Editar registro"></i></a>&nbsp;
                                        <a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt" title="Excluir registro"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

