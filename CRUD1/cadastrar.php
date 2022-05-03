<form action="?page=salvar" method="POST">
    <div class="form-group">
        <label>Nome do Cliente:</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <br>
    <label>Data de nascimento: </label>
    <br>
    <input type="date" name="dt_nascimento">
    <br><br>
    <label>Sexo: </label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value="m" checked>
        <label class="form-check-label" for="sexo">Masculino</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value="f">
        <label class="form-check-label" for="sexo">Feminino</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value="o">
        <label class="form-check-label" for="sexo">Outros</label>
    </div>
    <br>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Deixe um comentário" name="observacao" id="observacao" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Observações</label>
    </div>
    <br>
    <label>Selecione seu estado: </label><br>
    <select class="form-select" aria-label="Default select example" name="uf" id="uf">
        <option selected></option>
        <option namevalue="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AM">AM</option>
        <option value="AP">AP</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MG">MG</option>
        <option value="MS">MS</option>
        <option value="MT">MT</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="PR">PR</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="RS">RS</option>
        <option value="SC">SC</option>
        <option value="SE">SE</option>
        <option value="SP">SP</option>
        <option value="TO">TO</option>
    </select>
    <br>
    <button type="submit" class="btn btn-outline-success">Cadastrar</button>
</form>