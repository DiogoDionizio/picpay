# Desafio do PicPay

Esse projeto visa resolver o desafio do PicPay, tentando utilizar as melhores práticas.

Link: https://github.com/PicPay/picpay-desafio-backend/blob/main/readme.md

# Requisitos (Regra de negocio)

- Existem dois tipos de usuarios. Os comuns e lojistas, ambos tem carteira com dinheiro e realizam transferencia entre eles.

- Para ambos os tipos de usuarios, precisamos das informações de 'Nome Completo', 'CPF', 'email' e 'senha'.

- O CPF/CNPJ ou email deve ser único no sistema. Sendo assim seu sistema deve permitir apenas um cadastro com o mesmo CPF ou endereço de email.

- Usuarios comuns podem enviar dinheiro (transferencia) para lojistas e entre usuarios.

- Lojistas só recebem transferencias, não enviam dinheiro para ninguem.

- Validar se o usuario tem saldo antes da transferencia.

- Antes de finalizar a transferencia, deve consultar um serviço autorizado de gateway externo, use este endereço mock para simular o serviço:
https://util.devi.tools/api/v2/authorize

- A operação de transferencia deve ser uma transação, que deve ser revertida caso aconteça alguma alguma inconsistência e o dinheiro deve voltar para a carteira do usuario que a enviou.

- No recebimento de pagamento, o usuario ou lojista precisa receber notificações (envio de email, sms) enviado por um serviço externo de terceiro e eventualmente este serviço pode estar indisponivel/instavel.
Utilize esse mock para simular o envio de notificações
[verbo POST] https://util.devi.tools/api/v1/notify

- Esse serviço precisa ser uma API RestFul

# Exemplos de endpoints

Transferencia:
- Você pode implementar o que achar conveniente, porem vamos nos atentar somente ao fluxo de transferencia entre dois usuarios. A implementação deve seguir o contrato abaixo:
```http request
POST /transfer
Content-Type: application/json
{
  "value": 100.0,
  "payer": 4,
  "payee": 15
}
```

# Tecnologias utilizadas:
- Docker
- Clear Architecture
- S.O.L.I.D
- Laravel
- ❌ API Rest
- ❌ Autenticação com JWT
- ❌ Testes com o PHPUnits
- ❌ CI/CI
- ❌ Pipeline GitLab