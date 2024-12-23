# Trabalho 04 - Design Patterns

> Trabalho desenvolvido na matéria de Linguagem de Programação e Paradigmas do curso de Sistemas de Informação da UNIDAVI
 
## Objetivo do Projeto

O objetivo deste projeto é aplicar pelo menos dois padrões de design em um sistema simples de registro de usuários, relatórios e notificações. O sistema será modular e flexível, permitindo a troca de comportamentos em tempo de execução. Para cada um dos padrões escolhidos, você terá que pesquisar sobre o padrão, entender como ele se aplica ao seu caso específico e implementar a solução de forma que atenda aos requisitos do sistema.

---

## Padrões de Design Implementados

### 1. Padrão **Singleton**

- **Problema Resolvido**: Criar um sistema de registro de usuários garantindo que apenas uma instância da classe de registro seja criada durante toda a execução do sistema.
- **Pesquisa e Exploração**: A implementação foi baseada em [thread-safe Singleton](https://en.wikipedia.org/wiki/Singleton_pattern#Thread-safe_singletons) para garantir que, mesmo em acessos simultâneos, a classe de registro de usuários seja única.
- **Testes**: Testamos se a instância criada é única e validamos o funcionamento da solução em situações de múltiplos acessos simultâneos.
![image](https://github.com/user-attachments/assets/0af2b2f9-220e-431f-bc5d-7a32b32ae518)


### 2. Padrão **Decorator**

- **Problema Resolvido**: Criar um sistema de geração de relatórios onde os relatórios podem ser dinamicamente modificados com diferentes funcionalidades de formatação, como bordas, cabeçalhos e mudanças de cor.
- **Pesquisa e Exploração**: O padrão Decorator foi aplicado para modificar os relatórios de forma modular e flexível, sem alterar o código original de geração dos relatórios.
- **Testes**: Testamos como os diferentes decoradores interagem entre si, garantindo que a formatação do relatório funcione conforme o esperado.
![image](https://github.com/user-attachments/assets/5036f972-c12e-48f5-9345-f039cb1d5433)

---

## Como Executar o Projeto

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/aagablm/trabalho04
   ```
   
2. **Navegue até o diretório do projeto:**
   ```bash
   cd trabalho04
   ```

3. **Configure o servidor local:**
   ```bash
   php -S localhost:8000
   ```

4. **Acesse o projeto no navegador:**
  Abra o navegador e acesse [http://localhost/trabalho04/index.html.](http://localhost:8000)


## 🤝 Desenvolvedoras

As seguintes pessoas contribuíram para este projeto:

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/LaisaGarlini" title="Laisa Garlini">
        <img src="https://avatars.githubusercontent.com/u/128845740?v=4" width="100px;" alt="Foto de Laisa Garlini no GitHub"/><br>
        <sub>
          <b>Laisa Garlini</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/aagablm" title="Ana Gabriela Lima">
        <img src="https://avatars.githubusercontent.com/u/97294208?v=4" width="100px;" alt="Foto de Ana Gabriela no GitHub"/><br>
        <sub>
          <b>Ana Gabriela Lima</b>
        </sub>
      </a>
    </td>
