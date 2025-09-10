# Repositório de Exercícios em PHP

## Visão Geral
Este repositório contém uma coleção de exercícios em PHP desenvolvidos para me ajudar a praticar conceitos fundamentais da linguagem PHP. 
Os exercícios abrangem entrada de dados, cálculos simples, manipulação de números, geração de números aleatórios, manipulação de números reais e integração com APIs externas.

## Pré-requisitos
Para executar os exercícios usando o XAMPP com o servidor Apache, você precisa:
- [XAMPP](https://www.apachefriends.org/) instalado (compatível com PHP 7.4 ou superior).
- Conhecimento básico de PHP, HTML e desenvolvimento web.
- Um editor de texto ou IDE (ex.: VS Code, PHPStorm).
- Para o Exercício 6: Acesso à internet e uma chave de API de um serviço de conversão de moedas (ex.: [ExchangeRate-API](https://www.exchangerate-api.com/)).

## Configurando o Ambiente com XAMPP
1. **Instale o XAMPP**:
   - Baixe e instale o XAMPP em [https://www.apachefriends.org/](https://www.apachefriends.org/).
   - Siga as instruções de instalação para seu sistema operacional.

2. **Inicie o Apache**:
   - Abra o painel de controle do XAMPP e inicie o módulo **Apache** clicando em "Start". Certifique-se de que a porta 80 está livre.

3. **Clone ou baixe o repositório**:
   - Clone ou faça o download deste repositório.
   - Copie a pasta do repositório para o diretório `htdocs` do XAMPP (ex.: `C:\xampp\htdocs` no Windows ou `/opt/lampp/htdocs` no Linux/macOS).

4. **Acesse os exercícios**:
   - No navegador, acesse `http://localhost/nome-da-pasta-do-repositorio` (ex.: `http://localhost/php-exercicios`).

## Estrutura de Pastas
- `/exercicios`: Contém os arquivos PHP para cada exercício (ex.: `exercicio1.php`, `exercicio2.php`, etc.).
- `/soluções`: Contém exemplos de soluções para referência (se incluído).
- `/testes`: Contém scripts de teste opcionais para validar as soluções (se aplicável).

## Descrição dos Exercícios

### Exercício 1: Soma de Dois Números
- **Descrição**: Recebe dois números via formulário HTML e exibe a soma entre eles.
- **Entrada**: Dois números fornecidos pelo usuário.
- **Saída**: A soma dos números no formato: `Resultado: X`.
- **Arquivo**: `exercicios/exercicio1.php`
- **Exemplo**:
Primeiro número: 5
Segundo número: 3
Resultado: 8

### Exercício 2: Sucessor e Antecessor
- **Descrição**: Recebe um número via formulário HTML e exibe seu sucessor (número + 1) e antecessor (número - 1).
- **Entrada**: Um número fornecido pelo usuário.
- **Saída**: Exibe o número, seu sucessor e antecessor no formato: `Seu número: X, Sucessor: Y, Antecessor: Z`.
- **Arquivo**: `exercicios/exercicio2.php`
- **Exemplo**:
Seu número: 5
Sucessor: 6
Antecessor: 4

### Exercício 3: Gerador de Números Aleatórios
- **Descrição**: Gera um número aleatório entre 1 e 100 ao clicar em um botão.
- **Entrada**: Nenhuma (o número é gerado automaticamente).
- **Saída**: Exibe o número gerado no formato: `Um número entre 1 e 100 foi sorteado: X`.
- **Arquivo**: `exercicios/exercicio3.php`
- **Exemplo**:
  Um número entre 1 e 100 foi sorteado: 7

### Exercício 4: Conversão de Reais para Dólares (Cotação Fixa)
- **Descrição**: Converte um valor em reais (BRL) para dólares (USD) usando uma cotação fixa de R$ 5,46.
- **Entrada**: Um valor em reais fornecido pelo usuário.
- **Saída**: Exibe o valor convertido no formato: `O valor da conversão de BRL R$ X,XX para USD é: $ Y,YY`.
- **Arquivo**: `exercicios/exercicio4.php`
- **Exemplo**:
  O valor da conversão de BRL R$ 100,00 para USD é: $ 18,32
  
### Exercício 5: Separação de Parte Inteira e Decimal
- **Descrição**: Recebe um número real (float) via formulário HTML e separa sua parte inteira e decimal.
- **Entrada**: Um número real fornecido pelo usuário.
- **Saída**: Exibe o número, sua parte inteira e decimal no formato: `Seu número: X, Parte inteira: Y, Parte decimal: Z`.
- **Arquivo**: `exercicios/exercicio5.php`
- **Exemplo**:
Seu número: 123.45
Parte inteira: 123
Parte decimal: 0.45

### Exercício 6: Conversão de Reais para Dólares (API Externa)
- **Descrição**: Converte um valor em reais (BRL) para dólares (USD) usando uma cotação obtida de uma API externa (ex.: ExchangeRate-API).
- **Entrada**: Um valor em reais fornecido pelo usuário.
- **Saída**: Exibe o valor convertido com base na cotação da API no formato: `O valor da conversão de BRL R$ X,XX para USD é: $ Y,YY`.
- **Arquivo**: `exercicios/exercicio6.php`
- **Pré-requisito Adicional**: Obtenha uma chave de API gratuita em [ExchangeRate-API](https://www.exchangerate-api.com/) e configure-a no arquivo `exercicio6.php`.
- **Exemplo**:
  O valor da conversão de BRL R$ 100,00 para USD é: $ 18,50
  *Nota*: O valor em USD depende da cotação obtida pela API no momento da execução.

## Como Usar
1. Navegue até a pasta `/exercicios` dentro do diretório `htdocs`.
2. Abra um arquivo de exercício (ex.: `exercicio1.php`) em seu editor de texto.
3. Leia as instruções ou comentários no arquivo para entender a tarefa.
4. Escreva seu código PHP e salve o arquivo.
5. Acesse o arquivo no navegador (ex.: `http://localhost/php-exercicios/exercicio1.php`) para testar sua solução.
6. Para o Exercício 6, configure a chave de API no código antes de executar.
7. Compare sua solução com as fornecidas na pasta `/soluções` (se disponível).

## Executando Testes
Se testes forem fornecidos:
1. Navegue até a pasta `/testes` dentro do diretório `htdocs`.
2. Acesse o script de teste pelo navegador (ex.: `http://localhost/php-exercicios/testes/nome_do_teste.php`) ou execute pelo terminal:
 `bash
 php C:\xampp\htdocs\php-exercicios\testes\nome_do_teste.php`

Solução de Problemas Comuns

Apache não inicia: Verifique se a porta 80 está em uso (ex.: por outro serviço como Skype). Altere a porta no arquivo httpd.conf ou libere a porta.
Erro 404: Certifique-se de que o arquivo PHP está na pasta correta (htdocs) e que o caminho no navegador está correto.
Erro de permissão: No Linux/macOS, ajuste as permissões da pasta htdocs com chmod -R 755 htdocs.
Erro na API (Exercício 6): Verifique se a chave de API está correta e se há conexão com a internet. Consulte a documentação da API para erros específicos.

Contribuições
Sinta-se à vontade para contribuir com novos exercícios ou melhorias! Envie um pull request ou abra uma issue com suas sugestões.
Licença
Este projeto é licenciado sob a Licença MIT (se aplicável).
Contato
Para dúvidas ou sugestões, entre em contato através do GitHub Issues ou diretamente pelo email [seu_email@example.com].
Happy coding!


### Observações
- **Exercício 6 (API Externa)**: O README menciona o uso do [ExchangeRate-API](https://www.exchangerate-api.com/), mas você pode adaptar para outra API de sua preferência. Instruções para configurar a chave de API são incluídas.
- **Exercício 5**: A descrição foi baseada na sua última mensagem, com a separação de parte inteira e decimal de um número real.
- **Link para Issues**: Substitua `link_para_issues` pelo URL real do repositório no GitHub, se aplicável.
- **Email de Contato**: Substitua `[seu_email@example.com]` pelo seu email, se desejar.

Se precisar de exemplos de código PHP para algum dos exercícios ou ajustes no README, é só pedir!
