<h3 style="text-align: center; font-size: 24px; color: #006400; font-family: Arial, sans-serif; margin-bottom: 20px;">
    Solicite Sua Reserva
</h3>

<form action="?pg=calendario" method="post" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
    <label for="nome" style="font-family: Arial, sans-serif; font-size: 16px; color: #333;">Nome:</label>
    <input type="text" id="nome" name="nome" required style="width: 100%; padding: 10px; margin-bottom: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>

    <label for="apartamento" style="font-family: Arial, sans-serif; font-size: 16px; color: #333;">Apartamento:</label>
    <input type="text" id="apartamento" name="apartamento" required style="width: 100%; padding: 10px; margin-bottom: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>

    <label for="data" style="font-family: Arial, sans-serif; font-size: 16px; color: #333;">Data:</label>
    <input type="date" id="data" name="data" required style="width: 100%; padding: 10px; margin-bottom: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>

    <label for="horainicio" style="font-family: Arial, sans-serif; font-size: 16px; color: #333;">Horário Início:</label>
    <input type="time" id="horainicio" name="horainicio" required style="width: 100%; padding: 10px; margin-bottom: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>

    <label for="horafim" style="font-family: Arial, sans-serif; font-size: 16px; color: #333;">Horário Fim:</label>
    <input type="time" id="horafim" name="horafim" required style="width: 100%; padding: 10px; margin-bottom: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;"><br>

    <label for="observacao" style="font-family: Arial, sans-serif; font-size: 16px; color: #333;">Observação:</label>
    <textarea id="observacao" name="observacao" rows="4" style="width: 100%; padding: 10px; margin-bottom: 20px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;"></textarea><br>

    <input type="submit" value="Solicitar" style="background-color: #4CAF50; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">
</form>

