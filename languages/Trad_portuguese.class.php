<?php

class Trad {

  # Palavras

  const W_ISSUE = 'Problema';
  const W_OPEN = 'Aberto';
  const W_OPENED = 'Aberto';
  const W_CLOSED = 'Fechado';
  const W_REOPENED = 'Reaberto';
  const W_COMMENTED = 'Comentado';
  const W_NOBODY = 'ninguém';
  const W_SOMEONE = 'alguém';
  const W_ENABLED = 'Ativado';
  const W_DISABLED = 'Desativado';
  const W_NOTFOUND = 'Não encontrado';
  const W_FORBIDDEN = 'Proibido';
  const W_MENU = 'Menu';

  const W_EXAMPLE = 'Exemplo';
  const W_HEX = 'Hex';
  const W_RENDERING = 'Rendering';
  const W_ID = 'ID';
  const W_DISPLAY_NAME = 'Nome de visualização';

  const W_SECONDE = 'segundo';
  const W_MINUTE = 'minuto';
  const W_HOUR = 'hora';
  const W_DAY = 'dia';
  const W_WEEK = 'semana';
  const W_MONTH = 'mês';
  const W_YEAR = 'ano';
  const W_DECADE = 'década';
  const W_SECONDE_P = 'segundos';
  const W_MINUTE_P = 'minutos';
  const W_HOUR_P = 'horas';
  const W_DAY_P = 'dias';
  const W_WEEK_P = 'semanas';
  const W_MONTH_P = 'meses';
  const W_YEAR_P = 'anos';
  const W_DECADE_P = 'décadas';

  const W_PREVIOUS = 'Anterior';
  const W_NEXT = 'Seguinte';
  const W_MORE = 'MAIS';
  const W_CURRENT = 'Página %nb1% de %nb2%';

  const W_NOT_LOGGED = 'Sem login';

  const W_SUSPENSION = '…';
  const W_EXTRACT = '“%texto%”';

  const W_USER = 'Utilizador';
  const W_DEVELOPPER = 'Developer';
  const W_SUPERUSER = 'Superutilizador';
  const W_S_NEW = 'Novo';
  const W_S_CONFIRMED = 'Confirmado';
  const W_S_ASSIGNED = 'Atribuído a %utilizador%';
  const W_S_RESOLVED = 'Resolvido';
  const W_S_REJECTED = 'Rejeitado';
  const W_L_URGENT = 'Urgente';
  const W_L_IMPROVEMENT = 'Melhoria';
  const W_L_PRIVATE = 'Privado';

  const W_PROFILEPIC = 'foto de perfil';

  const W_RSS = 'Feed RSS';
  const W_VERSION = 'Versão';

  const W_CAPTCHA_IMAGE = 'Imagem CAPTCHA';
  const W_CAPTCHA_REFRESH = 'Actualizar imagem';
  const W_CAPTCHA_INPUT = 'Introduza o texto:';

  # Verbos

  const V_UPDATE = 'Actualizar';
  const V_UPDATE_DETAILS = 'Actualizar detalhes';
  const V_UPDATE_CONTENT = 'Actualizar conteúdo';
  const V_UPDATE_AND = 'Actualização & %adjectivo%';
  const V_CANCEL = 'Cancelar';
  const V_PREVIEW = 'Pré-visualização';
  const V_COMMENT = 'Comentário';
  const V_SUBMIT = 'Enviar';
  const V_SELECT_FILE = 'Selecione um ficheiro…';
  const V_UPLOADING = 'A enviar…';
  const V_SAVE_CONFIG = 'Guardar configurações';
  const V_APPLY = 'Aplicar';
  const V_EDIT = 'Editar';
  const V_SIGNUP = 'Registar-se';
  const V_LOGIN = 'Login';
  const V_CONTINUE = 'Continuar';
  const V_REMOVE_ISSUE = 'Apagar problema';
  const V_CLOSE = 'fechar';
  const V_REOPEN = 'reabrir';
  const V_EXPORT = 'Exportar dados em bruto';

  # Frases

  const S_NOLABEL = '-';
  const S_NODEPENDENCY = '-';
  const S_COMMENT_LEAVE = 'Deixar um comentário:';
  const S_AGO = '%duration% %pediod% atrás';
  const S_ISSUE_ABOUT = 'Sobre este problema:';
  const S_UPLOAD_ADD = 'Anexar um ficheiro:';
  const S_WELCOME = 'Bem-vindo, %utilizador%';
  const S_NUNCA = 'Nunca';
  const S_ME = 'De atualizações sobre questões para as quais contribuí';
  const S_ALWAYS = 'De cada actualização';
  const S_START_NOTIF = 'Ser notificado sobre novas atualizações';
  const S_STOP_NOTIF = 'Não será mais notificado sobre atualizações';
  const S_NOTFOUND = 'A página que procura já não existe...';
  const S_FORBIDDEN = 'Não tem permissão para aceder a esta página. Por favor faça login/logout para continuar.';

  const S_VIEW_PARTICIPATION = 'Ver a sua participação.';
  const S_VIEW_STATUS = 'Ver problemas “%status%”.';

  const S_ISSUE_CREATED = 'por %utilizador% %tempo%';
  const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
  const S_ISSUE_STATUS_UPDATED = 'Estado atualizado para %status% por %user% %time%.';

  const S_RSS_ISSUE_UPDATED = '%adj% por %utilizador%.';
  const S_RSS_ISSUE_STATUS_UPDATED = 'Estado atualizado para “%status%” por %utilizador%.';

  const S_INTRO_INSTALL = 'Parece que é a primeira vez que executas o phpmyBugs! Por favor configure-o:';
  const S_FIRST_ISSUE_TITLE = 'Como estás, abóbora?';
  const S_FIRST_ISSUE = 'Sou o teu primeiro problema! Após o login, poderá eliminar-me.';

  const S_NO_USER = 'Nenhum utilizador corresponde ao seu pedido.';
  const S_NO_ISSUE = 'Nenhum problema corresponde ao seu pedido.';
  const S_MATCHING_ISSUES = '%nb% problemas de correspondência';
  const S_NO_ACTIVITY = 'Nenhuma atividade recente.';
  const S_NO_UPLOAD = 'Sem upload.';
  const S_SIZE_REMAINING = '%remain% restante no %total% permitido.';
  const S_NO_PROJECT = 'Nenhum projeto.';

  const S_SEARCH = '#12, @utilizador, palavras…';
  const S_COPYRIGHT = 'Desenvolvido por %nome%.';
  const S_UPGRADE = 'Obter a versão mais recente do <a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> para <a href="https://bugtrackr.github .io /wiki/upgrade/">atualizar</a>.';

  const S_LAST_UPDATES = 'Últimas atualizações…';

  const S_STAY_LOGGEDIN = 'Mantém-me ligado';

  const S_DEFAULT_DEFPROJ_DESC = 'Este é o projeto padrão ao qual todos têm acesso.';
  const S_DEFAULT_2NDPROJ_DESC = 'Este pode ser o seu segundo projeto onde apenas os utilizadores registados podem publicar problemas.';

  # Alertas

  const A_ERROR_DIRECTORY = '<strong>Erro:</strong> não foi possível criar o diretório “%nome%”.';
  const A_ERROR_FILE = '<strong>Erro:</strong> não foi possível ler o ficheiro “%nome%”.';
  const A_ERROR_FILE_WRITE = '<strong>Erro:</strong> não foi possível escrever o ficheiro “%nome%”.';
  const A_ERROR_FATAL = 'Desculpe, algo correu mal. Contacte um administrador se o problema persistir.';
  const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />Ficheiro “<strong>%file%</strong>” na linha < forte>%linha%</strong>.';

  const A_SUCCESS_INSTALL = '<strong>Concluído:</strong> O phpmyBugs está agora completamente configurado.';
  const A_ERROR_INSTALL = '<strong>Erro:</strong> o phpmyBugs já está configurado. Por favor remova o ficheiro de configuração se pretender repor a configuração.';
  const A_MODIF_SAVED = 'As modificações foram guardadas.';

  const A_ERROR_FORM = 'Ocorreu um erro. Por favor envie novamente o formulário.';
  const A_ERROR_TOKEN = 'Token errado. Por favor envie novamente o formulário.';
  const A_ERROR_EMPTY = 'Deve especificar um nome de utilizador e uma palavra-passe.';
  const A_ERROR_SAME_USERNAME = 'Este nome de utilizador não está disponível.';
  const A_SUCCESS_SIGNUP = '<strong>Concluído:</strong> Agora pode iniciar sessão.';

  const A_CONFIRM_DELETE_COMMENT = 'Tem a certeza que pretende eliminar este comentário?';
  const A_SUCCESS_DELETE_COMMENT = 'O comentário foi eliminado.';
  const A_CONFIRM_DELETE_ISSUE = 'Tem a certeza que pretende eliminar este problema?';
  const A_SUCCESS_DELETE_ISSUE = 'O problema foi eliminado.';
  const A_CONFIRM_DELETE_UPLOAD = 'Tem a certeza que pretende eliminar este ficheiro?';
  const A_CONFIRM_DELETE_PROJECT = 'Tem a certeza que pretende eliminar este projeto? Todos os problemas correspondentes serão perdidos.';

  const A_LOGGED = 'Está agora ligado ao sistema.';
  const A_LOGGED_OUT = 'Agora está desligado do sistema.';
  const A_ERROR_CONNEXION = '<strong>Erro:</strong> Nome de utilizador ou palavra-passe incorretos.';
  const A_ERROR_CONNEXION_WAIT = '<strong>Erro:</strong> Nome de utilizador ou palavra-passe incorretos. Aguarde %duration% %period% antes de tentar novamente.';
  const A_ERROR_LOGIN_WAIT = 'Aguarde %duration% %period% antes de tentar novamente. Esta é uma proteção contra ataques maliciosos.';

  const A_ERROR_UPLOAD = 'Ocorreu um erro. Por favor, tente novamente.';
  const A_ERROR_UPLOAD_SIZE = 'O ficheiro excede o tamanho máximo permitido (%nb% max).';
  const A_ERROR_UPLOAD_FULL = 'Não tem espaço em disco suficiente para enviar este ficheiro: %nb% restante.';

  const A_PLEASE_LOGIN_ISSUES = 'Faça login para ver os problemas.';
  const A_PLEASE_LOGIN_COMMENT = 'Por favor, inicie sessão para publicar um comentário. Ainda não tem conta? Crie um: é gratuito e muito rápido!';
  const A_PLEASE_LOGIN_ISSUE = 'Por favor, inicie sessão para enviar um problema. Ainda não tem conta? Crie um: é gratuito e muito rápido!';
  const A_SHOULD_LOGIN = 'Se tem uma conta, inicie sessão';
  const A_IE = 'O seu browser está obsoleto: <a href="https://www.browser-update.org/en/update.html">actualizar ou alterar</a>.';

  # E-mails

  const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] Novo comentário';
  const M_NEW_COMMENT = 'Olá, %nome_utilizador%!

O problema #%id% — “%summary%” acaba de ser comentado por %by%. Pode ler o novo comentário aqui:
  %url%.

Se não quiser receber mais notificações sobre este assunto, está disponível uma opção (após o login) através do link acima.

-----
Este é um e-mail automático, por favor não responda.
  ';

  const M_NEW_ISSUE_O = '[%title% — %project%] Novo problema';
  const M_NEW_ISSUE = 'Olá, %nome_utilizador%!

O problema #%id% — “%summary%” acaba de ser enviado por %by%. Pode ler aqui:
  %url%.

Se não quiser receber mais notificações sobre este assunto, está disponível uma opção (após o login) através do link acima.

-----
Este é um e-mail automático, por favor não responda.
  ';

  # Títulos

 const T_INSTALLATION = 'Instalação';
  const T_SETTINGS = 'Definições';
  const T_GLOBAL_SETTINGS = 'Definições globais';
  const T_APPEARANCE = 'Aparência';
  const T_ISSUES = 'Problemas';
  const T_GROUPS = 'Grupos';
  const T_USERS = 'Utilizadores';
  const T_PERMISSIONS = 'Permissões';
  const T_ENABLE_CAPTCHA = 'Gerir Captcha';
  const T_CAPTCHA = 'Captcha';
  const T_BROWSE_ISSUES = 'Problemas de navegação';
  const T_BROWSE_ALL_ISSUES = 'Navegar por todos os problemas';
  const T_ALL_ISSUES_DESCRIPTION = 'Todos estes são problemas abertos para todos os projetos';
  const T_NEW_ISSUE = 'Novo problema';
  const T_ALL_ISSUES = 'Todos os problemas';
  const T_PROJECTS = 'Projectos';
  const T_DASHBOARD = 'Painel';
  const T_LAST_UPDATES = 'Últimas atualizações';
  const T_LAST_ACTIVITY = 'Última atividade';
  const T_UPLOADS = 'Carregamentos';
  const T_SEARCH = 'Pesquisar';
  const T_LINK_CONTACT = 'Contacte-nos';
  const T_LINK_LEGALNOTICE = 'Aviso Legal';
  const T_LINK_PRIVACYPOLICY = 'Política de Privacidade';
  const T_API_SETTINGS = 'API';
  const T_API_ENABLE_SETTINGS = 'Gerir API';
  const T_API_ACCESS_SETTINGS = 'Acesso API';
  const T_INFO = 'Informação';

  # FORMULÁRIOS

  const F_USERNAME = 'Nome de utilizador:';
  const F_PASSWORD = 'Password:';
  const F_USERNAME2 = 'Nome de utilizador';
  const F_PASSWORD2 = 'Password';
  const F_NAME = 'Nome:';
  const F_URL = 'Url:';
  const F_URL_CDN = 'URL do CDN:';
  const F_URL_REWRITING = 'Reescrita de URL:';
  const F_INTRO = 'Introdução:';
  const F_DESCRIÇÃO = 'Descrição:';
  const F_EMAIL = 'E-mail:';
  const F_LINK_CONTACT = 'Link para a página de contacto externo (pode ser deixado em branco):';
  const F_LINK_LEGALNOTICE = 'Link para aviso legal (pode ser deixado em branco):';
  const F_LINK_PRIVACYPOLICY = 'Link para a política de privacidade (pode ser deixado em branco):';
  const F_MAX_UPLOAD = 'Tamanho máximo por upload:';
  const F_ALLOCATED_SPACE = 'Espaço alocado por utilizador:';
  const F_GROUP = 'Grupo:';
  const F_NOTIFICATIONS = 'Ser notificado:';
  const F_PROJECT_X = 'Projecto “%nome%”:';
  const F_LANGUAGE = 'Idioma:';
  const F_LOGS = 'Registos:';

  const F_ISSUES_PAGE = 'Problemas por página:';
  const F_ISSUES_PAGE_SEARCH = 'Problemas por página (pesquisa):';
  const F_PREVIEW_ISSUE = 'Duração das vistas (problemas):';
  const F_PREVIEW_SEARCH = 'Comprimento das vistas (pesquisa):';
  const F_PREVIEW_PROJECT = 'Duração das vistas (projectos):';
  const F_LAST_EDITS = 'Número de problemas apresentados nos painéis:';
  const F_LAST_ACTIVITY = 'Número de problemas apresentados nas páginas dos utilizadores:';
  const F_THEME = "Tema";
  const F_TIP_THEME = "Colocar o ficheiro . css em";

  const F_ADD_PROJECT = 'Novo projeto';
  const F_ADD_COLOR = 'Nova cor';
  const F_ADD_STATUS = 'Novo estado';
  const F_ADD_LABEL = 'Novo rótulo';
  const F_ADD_GROUP = 'Novo grupo';
  const F_ADD_USER = 'Novo utilizador';

  const F_SORT_BY = 'Classificar por:';
  const F_SORT_ID = 'ID';
  const F_SORT_MOD = 'última atualização';
  const F_SORT_DESC = 'descendente';
  const F_SORT_ASC = 'crescente';
  const F_FILTER_STATUSES = 'Estado do filtro:';
  const F_FILTER_STATES = 'Estados do filtro:';
  const F_FILTER_LABELS = 'Rótulos de filtro:';
  const F_FILTER_USERS = 'Filtrar utilizadores:';
  const F_FILTER_MILESTONE = 'Filtrar marco:';

  const F_WRITE = 'Escrever:';
  const F_SUMMARY = 'Resumo';
  const F_CONTENT = 'Conteúdo';

  const F_STATUS = 'Estado:';
  const F_RELATED = 'Relacionado:';
  const F_LABELS2 = 'Etiquetas:';
  const F_MILESTONE = 'Marco:';

  const F_GENERAL_SETTINGS = 'Definições gerais:';
  const F_PROJECTS = 'Projectos:';
  const F_DATABASE = 'Base de dados:';
  const F_UPLOADS = 'Carregamentos:';
  const F_COLORS = 'Gerir cores:';
  const F_DISPLAY = 'Gerir visualização:';
  const F_STATUSES = 'Gerir estado:';
  const F_LABELS = 'Gerir rótulos:';
  const F_GROUPS = 'Gerir grupos:';
  const F_PERMISSIONS = 'Gerir permissões:';
  const F_USERS = 'Gerir utilizadores:';

  const F_INVALID_CAPTCHA = 'O CAPTCHA que introduziu estava errado. Por favor, tente novamente.';

  const F_TIP_NAME = 'Será apresentado no cabeçalho de cada página.';
  const F_TIP_URL_REWRITING = 'Deixe este campo vazio para desativar a reescrita de URL. Caso contrário, deverá conter o caminho para a pasta phpmyBugs (iniciada e terminada com "/"), relativamente ao nome do domínio. ';
  const F_TIP_URL_CDN = 'Deixe este campo vazio para desativar o CDN. Caso contrário, deverá conter o URL do seu CDN (por exemplo <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, sinta-se à vontade para utilizar este). Certifique-se de que aloja todos os ficheiros da pasta <em>/public</em> no seu CDN.';
  const F_TIP_INTRO = 'Será apresentado na página inicial. Será analisado com a sintaxe Markdown. Nota: se existir apenas um projeto denominado “%name%”, a página inicial será automaticamente redirecionada para o dashboard do projeto, e este texto não será apresentado.';
  const F_TIP_EMAIL = 'Deixe este campo vazio para desativar as notificações por e-mail. Caso contrário, este endereço será utilizado como remetente ao enviar uma notificação por e-mail.';
  const F_TIP_PASSWORD = 'Deixar em branco se não pretender alterar a password.';
  const F_TIP_USER_EMAIL = 'Obrigatório apenas se pretende receber notificações.';
  const F_TIP_NOTIFICATIONS = 'Esta é uma configuração padrão: poderá alterá-la para cada problema.';
  const F_TIP_NOTIFICATIONS_DISABLED = 'Nota: as notificações estão atualmente desativadas pelo administrador.';
  const F_TIP_DESCRIPTION = 'Será apresentado no painel do projeto. Será analisado com a sintaxe de markdown.';

  const F_TIP_MAX_UPLOAD = 'Cada ficheiro enviado não pode exceder este tamanho.';
  const F_TIP_ALLOCATED_SPACE = 'Um utilizador não pode fazer o upload de outros ficheiros depois de atingir este limite. <br /><em>Atenção:</em> se nenhum utilizador com sessão iniciada tiver permissão para fazer o upload de ficheiros (esta não é a definição padrão ), este limite não se lhes aplica.';

  const F_TIP_ID_STATUS = '<b>Sugestão:</b> tenha cuidado ao alterar os IDs, pois cada pendência mantém o seu ID de estado antigo (exceto se este ID já não existir: neste caso, será utilizado o estado predefinido).';
  const F_TIP_ID_LABEL = '<b>Tip:</b> be careful when changing the IDs, because each label of one issue keeps its old ID (except if this ID does not exist anymore: in this case, the label is removed from the problema).';
  const F_TIP_ID_GROUP = '<b>Sugestão:</b> tenha cuidado ao alterar os IDs, pois cada utilizador mantém o seu antigo ID de grupo (exceto se este ID já não existir: neste caso, será utilizado o grupo predefinido).';
  const F_TIP_CAPTCHA = 'Escolha as ações onde será mostrado um captcha para utilizadores não com sessão iniciada.';
  const F_TIP_API_ACCESS = 'Configurar o acesso à API no ficheiro <em>/database/config_api.php</em>. Para mais informações consulte o ficheiro API.md.';

  const F_API_ENABLE = 'Ativar API';

  const HELP_MARKDOWN = '
  <h2>Marcarsintaxe própria:</h2>

  <p>Parágrafos:</p>
<pre><code class="blank no-highlight">Os parágrafos são separados por uma ou mais linhas em branco.
É por isso que este texto será apresentado na mesma linha da frase anterior, independentemente da quebra de linha.

Para iniciar uma nova linha sem criar um novo parágrafo:
insira 2 espaços antes da quebra de linha, como aqui.</code></pre>
  <p>Ênfase:</p>
<pre><code class="blank no-highlight">*Texto em itálico*
_Texto itático novamente_

**Texto a negrito**
__Texto novamente em negrito__ </code></pre>

  <p>Links:</p>
<pre><code class="blank no-highlight">Este é [um exemplo](http://exemplo.com) de link incorporado.
Este é outro: &lt;http://exemplo.com&gt;.</code></pre>

  <p>Imagens:</p>
<pre><code class="blank no-highlight">![Eu sou uma imagem.](http://exemplo.com/imagem.png)</code></pre>

  <p>Cabeçalhos:</p>
<pre><code class="blank no-highlight"># Título de nível superior
## Título de segundo nível
### Título de terceiro nível
#### Título de quarto nível</code></pre>

  <p>Listas:</p>
<pre><code class="blank no-highlight">- um item
*outro

1. primeiro item
2. segundo item</code></pre>

  <p>Aspas em bloco:</p>
<pre><code class="blank no-highlight">> Sou uma citação em bloco com dois parágrafos.
>
> Eu sou o segundo parágrafo.</code></pre>

  <p>Blocos de código:</p>
<pre><code class="blank no-highlight">Este é um `bloco de código incorporado`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Sou um bloco de código, porque estou recuado
 com 4 espaços"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "Eu sou um bloco de código."; ?&gt;
```

```php
&lt;?php echo "As linguagens suportadas são: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, sem destaque"; ?&gt;
```</code></pre>
  ';


  private static $permissions = array(
  'home' => array(
  'title' => 'Página inicial:',
  'description' => 'Pode aceder à página inicial e visualizar a lista de todos os problemas em aberto para os seus projetos.'
  ),
  'painel' => array(
  'title' => 'Painéis:',
  'description' => 'Pode aceder aos painéis dos projetos.'
  ),
  'problemas' => array(
  'title' => 'Ver problemas:',
  'description' => 'Pode visualizar problemas públicos.'
  ),
  'questões_privadas' => array(
  'title' => 'Ver problemas privados:',
  'description' => 'Pode visualizar os problemas marcados como privados.'
  ),
  'pesquisar' => array(
  'title' => 'Pesquisar:',
  'description' => 'Pode pesquisar problemas ou utilizadores.'
  ),
  'new_issue' => array(
  'title' => 'Novo problema:',
  'description' => 'Pode enviar um novo problema.'
  ),
  'edit_issue' => array(
  'title' => 'Editar problemas:',
  'description' => 'Pode editar o texto de todos os fascículos e apagá-los.'
  ),
  'update_issue' => array(
  'title' => 'Problemas de actualização:',
  'description' => 'Pode atualizar problemas: alterar o estado, adicionar etiquetas, fechar e reabrir, ...'
  ),
  'post_comment' => array(
  'title' => 'Publicar um comentário:',
  'descrição' => 'Pode publicar um comentário.'
  ),
  'edit_comment' => array(
  'title' => 'Editar comentários:',
  'description' => 'Pode editar todos os comentários (os utilizadores podem editar os seus próprios comentários de qualquer forma).'
  ),
  'view_user' => array(
  'title' => 'Perfis de utilizador:',
  'description' => 'Pode visualizar todos os perfis de utilizador.'
  ),
  'carregar' => array(
  'title' => 'Publicar um ficheiro:',
  'description' => 'Pode anexar ficheiros a um comentário ou a um novo problema.'
  ),
  'view_upload' => array(
  'title' => 'Ver uploads:',
  'description' => 'Pode aceder a todos os ficheiros enviados.'
  ),
  'configurações' => array(
  'title' => 'Alterar definições:',
  'description' => 'Pode aceder a esta página e modificar todas as definições globais.'
  ),
  'registo' => array(
  'title' => 'Inscreva-se:',
  'descrição' => 'Pode inscrever-se.'
  ),
  'view_errors' => array(
  'title' => 'Ver erros fatais:',
  'description' => 'Pode visualizar a descrição de erros fatais.'
  )
  );

  public static function permissions($id, $type = 'description') {
  return self::$permissões[$id][$tipo];
  }

  private static $settings = array(
  'validate_url' => 'O URL não é válido.',
  'validate_email' => 'O e-mail não é válido.',
  'private_label_removed' => 'Não pode remover a etiqueta privada nem alterar o seu ID, mas pode renomeá-la.',
  'default_status_removed' => 'Não pode remover o estado padrão ou alterar o seu ID, mas pode renomeá-lo.',
  'default_group_removed' => 'Não pode remover o grupo padrão nem alterar o seu ID, mas pode renomeá-lo.',
  'default_group_superuser_removed' => 'Não pode remover o grupo de superutilizadores nem alterar o seu ID, mas pode renomeá-lo.',
  'validate_same_username' => 'Aviso: dois utilizadores têm o mesmo nome de utilizador.',
  'validate_same_project_name' => 'Dois projetos não podem ter o mesmo nome. Um foi renomeado automaticamente.',
  'language_modified' => 'Actualize esta página para a visualizar no novo idioma.'
  );

  public static function settings($id) {
  return self::$configurações[$id];
  }

  private static $errors = array(
  E_ERROR => 'Erro fatal',
  E_WARNING => 'Aviso',
  E_PARSE => 'Erro de análise',
  E_NOTICE => 'Aviso',
  E_STRICT => 'Conselho',
  E_DEPRECATED => 'Obsoleto','padrão' => 'Erro'
  );
  
  public static function errors($no) {
  return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
  }
}

?>