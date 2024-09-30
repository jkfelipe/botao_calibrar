# Calibração de Equipamento

Este projeto é uma demonstração simples de como integrar uma interface web com um processo de calibração de um equipamento.

## Tecnologias utilizadas:
- HTML5
- JavaScript
- PHP
- SQL

## Funcionalidades:
- Botão "Calibrar": Inicia a calibração, desabilitando o botão e exibindo uma mensagem de "Calibrando...".
- Monitoramento de Status: Verifica o status da calibração a cada 2 segundos, atualizando a mensagem no console do navegador.
- Mensagem de Conclusão: Exibe uma mensagem "Calibração completa!" após a conclusão da calibração, habilitando o botão novamente.

## Observações:
- O projeto usa PHP para simular as funções de iniciar a calibração e verificar o status.
- O código JavaScript é responsável pela interação com o usuário e a exibição das mensagens.
- Este é um exemplo básico, e pode ser adaptado para integrar com diferentes sistemas de calibração.


## Instruções para executar o projeto:
1. Configure um servidor web (ex: XAMPP, Apache) e instale o PHP.
2. Crie uma pasta para o projeto e coloque os arquivos index.html, start_calibration.php e check_status.php dentro dela.
3. Crie um banco de dados no MySQL usando o arquivo banco.sql
4. Acesso o endereço do seu servidor web no navegado.
