<h2 style="text-align: center; font-family: Arial, sans-serif; color: #333;">Cadastrar Novo Usuário</h2>
<br>

<form action="?pg=cadastra_usuario" method="post" style="width: 50%; margin: 0 auto; font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
    <label for="nome" style="font-weight: bold;">Nome:</label>
    <input type="text" id="nome" name="nome" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">
    
    <label for="apartamento" style="font-weight: bold;">Apartamento:</label>
    <input type="text" id="apartamento" name="apartamento" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">
    
    <label for="email" style="font-weight: bold;">E-mail:</label>
    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">
    
    <label for="telefone" style="font-weight: bold;">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">
    
    <label for="cidade" style="font-weight: bold;">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">
    
    <label for="estado" style="font-weight: bold;">Estado:</label>
    <input type="text" id="estado" name="estado" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">
    
    <label for="senha" style="font-weight: bold;">Senha:</label>
    <input type="password" id="senha" name="senha" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">
    
    <input type="submit" value="Cadastrar" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px;">
    <input type="reset" value="Limpar" style="width: 100%; padding: 10px; background-color: #f44336; color: white; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">
</form>
