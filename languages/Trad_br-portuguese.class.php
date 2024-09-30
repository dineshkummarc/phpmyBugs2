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
 const W_RENDERING = 'Renderização';
 const W_ID = 'ID';
 const W_DISPLAY_NAME = 'Nome de exibição';

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
 const W_NEXT = 'Próximo';
 const W_MORE = 'MAIS';
 const W_CURRENT = 'Página %nb1% de %nb2%';

 const W_NOT_LOGGED = 'Sem login';

 const W_SUSPENSION = '…';
 const W_EXTRACT = '“%texto%”';

 const W_USER = 'Usuário';
 const W_DEVELOPPER = 'Desenvolvedor';
 const W_SUPERUSER = 'Superusuário';
 const W_S_NEW = 'Novo';
 const W_S_CONFIRMED = 'Confirmado';
 const W_S_ASSIGNED = 'Atribuído a %user%';
 const W_S_RESOLVED = 'Resolvido';
 const W_S_REJECTED = 'Rejeitado';
 const W_L_URGENT = 'Urgente';
 const W_L_IMPROVEMENT = 'Melhoria';
 const W_L_PRIVATE = 'Privado';

 const W_PROFILEPIC = 'foto de perfil';

 const W_RSS = 'Feed RSS';
 const W_VERSION = 'Versão';

 const W_CAPTCHA_IMAGE = 'Imagem CAPTCHA';
 const W_CAPTCHA_REFRESH = 'Atualizar imagem';
 const W_CAPTCHA_INPUT = 'Digite o texto:';

 # Verbos

 const V_UPDATE = 'Atualizar';
 const V_UPDATE_DETAILS = 'Atualizar detalhes';
 const V_UPDATE_CONTENT = 'Atualizar conteúdo';
 const V_UPDATE_AND = 'Atualização & %adjetivo%';
 const V_CANCEL = 'Cancelar';
 const V_PREVIEW = 'Visualização';
 const V_COMMENT = 'Comentário';
 const V_SUBMIT = 'Enviar';
 const V_SELECT_FILE = 'Selecione um arquivo…';
 const V_UPLOADING = 'Enviando…';
 const V_SAVE_CONFIG = 'Salvar configurações';
 const V_APPLY = 'Aplicar';
 const V_EDIT = 'Editar';
 const V_SIGNUP = 'Cadastre-se';
 const V_LOGIN = 'Login';
 const V_CONTINUE = 'Continuar';
 const V_REMOVE_ISSUE = 'Excluir problema';
 const V_CLOSE = 'fechar';
 const V_REOPEN = 'reabrir';
 const V_EXPORT = 'Exportar dados brutos';

 # Frases

 const S_NOLABEL = '-';
 const S_NODEPENDENCY = '-';
 const S_COMMENT_LEAVE = 'Deixe um comentário:';
 const S_AGO = '%duration% %pediod% atrás';
 const S_ISSUE_ABOUT = 'Sobre este problema:';
 const S_UPLOAD_ADD = 'Anexar um arquivo:';
 const S_WELCOME = 'Bem-vindo, %user%';
 const S_NEVER = 'Nunca';
 const S_ME = 'De atualizações sobre questões para as quais contribuí';
 const S_ALWAYS = 'De cada atualização';
 const S_START_NOTIF = 'Ser notificado sobre novas atualizações';
 const S_STOP_NOTIF = 'Você não será mais notificado sobre atualizações';
 const S_NOTFOUND = 'A página que você está procurando não existe mais ...';
 const S_FORBIDDEN = 'Você não tem permissão para acessar esta página. Por favor, faça login/logout para continuar.';

 const S_VIEW_PARTICIPATION = 'Veja sua entrada.';
 const S_VIEW_STATUS = 'Ver problemas “%status%”.';

 const S_ISSUE_CREATED = 'por %user% %time%';
 const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
 const S_ISSUE_STATUS_UPDATED = 'Status atualizado para %status% por %user% %time%.';

 const S_RSS_ISSUE_UPDATED = '%adj% por %user%.';
 const S_RSS_ISSUE_STATUS_UPDATED = 'Status atualizado para “%status%” por %user%.';

 const S_INTRO_INSTALL = 'Parece que é a primeira vez que você executa o phpmyBugs! Por favor, configure-o:';
 const S_FIRST_ISSUE_TITLE = 'Como vai, abóbora?';
 const S_FIRST_ISSUE = 'Eu sou seu primeiro problema! Após o login, você poderá me excluir.';

 const S_NO_USER = 'Nenhum usuário corresponde à sua solicitação.';
 const S_NO_ISSUE = 'Nenhum problema corresponde à sua solicitação.';
 const S_MATCHING_ISSUES = '%nb% problemas de correspondência';
 const S_NO_ACTIVITY = 'Nenhuma atividade recente.';
 const S_NO_UPLOAD = 'Sem upload.';
 const S_SIZE_REMAINING = '%remain% restante no %total% permitido.';
 const S_NO_PROJECT = 'Nenhum projeto.';

 const S_SEARCH = '#12, @user, palavras…';
 const S_COPYRIGHT = 'Desenvolvido por %nome%.';
 const S_UPGRADE = 'Obtenha a versão mais recente do <a href="'.RELEASE.'">GitHub</a> para <a href="https://bugtrackr.github .io /wiki/upgrade/">atualizar</a>.';

 const S_LAST_UPDATES = 'Últimas atualizações…';

 const S_STAY_LOGGEDIN = 'Mantenha-me conectado';

 const S_DEFAULT_DEFPROJ_DESC= 'Este é o projeto padrão ao qual todos têm acesso.';
 const S_DEFAULT_2NDPROJ_DESC = 'Este pode ser seu segundo projeto onde apenas usuários registrados podem postar problemas.';

 # Alertas

 const A_ERROR_DIRECTORY = '<strong>Erro:</strong> não foi possível criar o diretório “%name%”.';
 const A_ERROR_FILE = '<strong>Erro:</strong> não foi possível ler o arquivo “%nome%”.';
 const A_ERROR_FILE_WRITE = '<strong>Erro:</strong> não foi possível gravar o arquivo “%name%”.';
 const A_ERROR_FATAL = 'Desculpe, algo deu errado. Entre em contato com um administrador se o problema persistir.';
 const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />Arquivo “<strong>%file%</strong>” na linha < forte>%linha%</strong>.';

 const A_SUCCESS_INSTALL = '<strong>Concluído:</strong> O phpmyBugs agora está completamente configurado.';
 const A_ERROR_INSTALL = '<strong>Erro:</strong> o phpmyBugs já está configurado. Por favor, remova o arquivo de configuração se você deseja redefinir a configuração.';
 const A_MODIF_SAVED = 'As modificações foram salvas.';

 const A_ERROR_FORM = 'Ocorreu um erro. Por favor, envie o formulário novamente.';
 const A_ERROR_TOKEN = 'Token errado. Por favor, envie o formulário novamente.';
 const A_ERROR_EMPTY = 'Você deve especificar um nome de usuário e uma senha.';
 const A_ERROR_SAME_USERNAME = 'Este nome de usuário não está disponível.';
 const A_SUCCESS_SIGNUP = '<strong>Concluído:</strong> Agora você pode fazer login.';

 const A_CONFIRM_DELETE_COMMENT = 'Tem certeza de que deseja excluir este comentário?';
 const A_SUCCESS_DELETE_COMMENT = 'O comentário foi excluído.';
 const A_CONFIRM_DELETE_ISSUE = 'Tem certeza de que deseja excluir esse problema?';
 const A_SUCCESS_DELETE_ISSUE = 'O problema foi eliminado.';
 const A_CONFIRM_DELETE_UPLOAD = 'Tem certeza que deseja excluir este arquivo?';
 const A_CONFIRM_DELETE_PROJECT = 'Tem certeza de que deseja excluir este projeto? Todos os problemas correspondentes serão perdidos.';

 const A_LOGGED = 'Agora você está conectado ao sistema.';
 const A_LOGGED_OUT = 'Agora você está desconectado do sistema.';
 const A_ERROR_CONNEXION = '<strong>Erro:</strong> Nome de usuário ou senha incorretos.';
 const A_ERROR_CONNEXION_WAIT = '<strong>Erro:</strong> Nome de usuário ou senha incorretos. Aguarde %duration% %period% antes de tentar novamente.';
 const A_ERROR_LOGIN_WAIT = 'Aguarde %duration% %period% antes de tentar novamente. Esta é uma proteção contra ataques maliciosos.';

 const A_ERROR_UPLOAD = 'Ocorreu um erro. Por favor, tente novamente.';
 const A_ERROR_UPLOAD_SIZE = 'O arquivo excede o tamanho máximo permitido (%nb% max).';
 const A_ERROR_UPLOAD_FULL = 'Você não tem espaço em disco suficiente para enviar este arquivo: %nb% restante.';

 const A_PLEASE_LOGIN_ISSUES = 'Faça login para ver os problemas.';
 const A_PLEASE_LOGIN_COMMENT = 'Faça login para postar um comentário. Ainda não tem conta? Crie um: é grátis e muito rápido!';
 const A_PLEASE_LOGIN_ISSUE = 'Faça login para enviar um problema. Ainda não tem conta? Crie um: é grátis e muito rápido!';
 const A_SHOULD_LOGIN = 'Se você tem uma conta, faça login';
 const A_IE = 'Seu navegador está obsoleto: <a href="'.BROWSER.'">atualizar ou alterar</a>.';

 # E-mails

 const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] Novo comentário';
 const M_NEW_COMMENT = 'Olá, %nome_usuario%!

O problema #%id% — “%summary%” acaba de ser comentado por %by%. Você pode ler o novo comentário aqui:
 %url%.

Se você não quiser receber mais notificações sobre esse assunto, uma opção (após o login) está disponível usando o link acima.

-----
Este é um e-mail automático, por favor, não responda.
 ';

 const M_NEW_ISSUE_O = '[%title% — %project%] Novo problema';
 const M_NEW_ISSUE = 'Olá, %nome_usuario%!

O problema #%id% — “%summary%” acaba de ser enviado por %by%. Você pode ler aqui:
 %url%.

Se você não quiser receber mais notificações sobre esse assunto, uma opção (após o login) está disponível usando o link acima.

-----
Este é um e-mail automático, por favor, não responda.
 ';

 # Títulos

 const T_INSTALLATION = 'Instalação';
 const T_SETTINGS = 'Configurações';
 const T_GLOBAL_SETTINGS = 'Configurações globais';
 const T_APPEARANCE = 'Aparência';
 const T_ISSUES = 'Problemas';
 const T_GROUPS = 'Grupos';
 const T_USERS = 'Usuários';
 const T_PERMISSIONS = 'Permissões';
 const T_ENABLE_CAPTCHA = 'Gerenciar Captcha';
 const T_CAPTCHA = 'Captcha';
 const T_BROWSE_ISSUES = 'Problemas de navegação';
 const T_BROWSE_ALL_ISSUES = 'Navegar por todos os problemas';
 const T_ALL_ISSUES_DESCRIPTION = 'Todos esses são problemas abertos para todos os projetos';
 const T_NEW_ISSUE = 'Novo problema';
 const T_ALL_ISSUES = 'Todos os problemas';
 const T_PROJECTS = 'Projetos';
 const T_DASHBOARD = 'Painel';
 const T_LAST_UPDATES = 'Últimas atualizações';
 const T_LAST_ACTIVITY = 'Última atividade';
 const T_UPLOADS = 'Carregamentos';
 const T_SEARCH = 'Pesquisar';
 const T_LINK_CONTACT = 'Fale conosco';
 const T_LINK_LEGALNOTICE = 'Aviso Legal';
 const T_LINK_PRIVACYPOLICY = 'Política de Privacidade';
 const T_API_SETTINGS = 'API';
 const T_API_ENABLE_SETTINGS = 'Gerenciar API';
 const T_API_ACCESS_SETTINGS = 'Acesso API';
 const T_INFO = 'Informações';

 # FORMULÁRIOS

 const F_USERNAME = 'Nome de usuário:';
 const F_PASSWORD = 'Senha:';
 const F_USERNAME2 = 'Nome de usuário';
 const F_PASSWORD2 = 'Senha';
 const F_NAME = 'Nome:';
 const F_URL = 'Url:';
 const F_URL_CDN = 'URL da CDN:';
 const F_URL_REWRITING = 'Reescrita de URL:';
 const F_INTRO = 'Introdução:';
 const F_DESCRIPTION = 'Descrição:';
 const F_EMAIL = 'E-mail:';
 const F_LINK_CONTACT = 'Link para a página de contato externo (pode ser deixado em branco):';
 const F_LINK_LEGALNOTICE = 'Link para aviso legal (pode ser deixado em branco):';
 const F_LINK_PRIVACYPOLICY = 'Link para política de privacidade (pode ser deixado em branco):';
 const F_MAX_UPLOAD = 'Tamanho máximo por upload:';
 const F_ALLOCATED_SPACE = 'Espaço alocado por usuário:';
 const F_GROUP = 'Grupo:';
 const F_NOTIFICATIONS = 'Ser notificado:';
 const F_PROJECT_X = 'Projeto “%nome%”:';
 const F_LANGUAGE = 'Idioma:';
 const F_LOGS = 'Registros:';

 const F_ISSUES_PAGE = 'Problemas por página:';
 const F_ISSUES_PAGE_SEARCH = 'Problemas por página (pesquisa):';
 const F_PREVIEW_ISSUE = 'Duração das visualizações (problemas):';
 const F_PREVIEW_SEARCH = 'Comprimento das visualizações (pesquisa):';
 const F_PREVIEW_PROJECT = 'Duração das visualizações (projetos):';
 const F_LAST_EDITS = 'Número de problemas mostrados nos painéis:';
 const F_LAST_ACTIVITY = 'Número de problemas exibidos nas páginas dos usuários:';
 const F_THEME = "Tema";
 const F_TIP_THEME = "Coloque o arquivo . css em";

 const F_ADD_PROJECT = 'Novo projeto';
 const F_ADD_COLOR = 'Nova cor';
 const F_ADD_STATUS = 'Novo estado';
 const F_ADD_LABEL = 'Novo rótulo';
 const F_ADD_GROUP = 'Novo grupo';
 const F_ADD_USER = 'Novo usuário';

 const F_SORT_BY = 'Classificar por:';
 const F_SORT_ID = 'ID';
 const F_SORT_MOD = 'última atualização';
 const F_SORT_DESC = 'descendente';
 const F_SORT_ASC = 'crescente';
 const F_FILTER_STATUSES = 'Status do filtro:';
 const F_FILTER_STATES = 'Estados do filtro:';
 const F_FILTER_LABELS = 'Rótulos de filtro:';
 const F_FILTER_USERS = 'Filtrar usuários:';
 const F_FILTER_MILESTONE = 'Filtrar marco:';

 const F_WRITE = 'Escrever:';
 const F_SUMMARY = 'Resumo';
 const F_CONTENT = 'Conteúdo';

 const F_STATUS = 'Status:';
 const F_RELATED = 'Relacionado:';
 const F_LABELS2 = 'Tags:';
 const F_MILESTONE = 'Marco:';

 const F_GENERAL_SETTINGS = 'Configurações gerais:';
 const F_PROJECTS = 'Projetos:';
 const F_DATABASE = 'Banco de dados:';
 const F_UPLOADS = 'Carregamentos:';
 const F_COLORS = 'Gerenciar cores:';
 const F_DISPLAY = 'Gerenciar visualização:';
 const F_STATUSES = 'Gerenciar status:';
 const F_LABELS = 'Gerenciar rótulos:';
 const F_GROUPS = 'Gerenciar grupos:';
 const F_PERMISSIONS = 'Gerenciar permissões:';
 const F_USERS = 'Gerenciar usuários:';

 const F_INVALID_CAPTCHA = 'O CAPTCHA que você digitou estava errado. Por favor, tente novamente.';

 const F_TIP_NAME = 'Será exibido no cabeçalho de cada página.';
 const F_TIP_URL_REWRITING = 'Deixe este campo vazio para desativar a reescrita de URL. Caso contrário, deve conter o caminho para a pasta phpmyBugs (iniciada e terminada com "/"), em relação ao nome do domínio. ';
 const F_TIP_URL_CDN = 'Deixe este campo vazio para desativar o CDN. Caso contrário, deve conter a URL do seu CDN (por exemplo <em>'.CDN_RAW_GIT.'</em>, sinta-se à vontade para usar este). Certifique-se de hospedar todos os arquivos da pasta <em>/public</em> em seu CDN.';
 const F_TIP_INTRO = 'Será exibido na página inicial. Será analisado com a sintaxe Markdown. Nota: se houver apenas um projeto chamado “% name%”, a página inicial será automaticamente redirecionada para o painel do projeto, e esse texto não será exibido.';
 const F_TIP_EMAIL = 'Deixe este campo vazio para desativar as notificações por e-mail. Caso contrário, esse endereço será usado como remetente ao enviar uma notificação por e-mail.';
 const F_TIP_PASSWORD = 'Deixe em branco se não quiser alterar a senha.';
 const F_TIP_USER_EMAIL = 'Obrigatório apenas se você deseja receber notificações.';
 const F_TIP_NOTIFICATIONS = 'Esta é uma configuração padrão: você poderá alterá-la para cada problema.';
 const F_TIP_NOTIFICATIONS_DISABLED = 'Observação: as notificações estão atualmente desativadas pelo administrador.';
 const F_TIP_DESCRIPTION = 'Será exibido no painel do projeto. Será analisado com a sintaxe de markdown.';

 const F_TIP_MAX_UPLOAD = 'Cada arquivo enviado não pode exceder esse tamanho.';
 const F_TIP_ALLOCATED_SPACE = 'Um usuário não pode fazer upload de outros arquivos depois de atingir esse limite. <br /><em>Atenção:</em> se nenhum usuário logado tiver permissão para fazer upload de arquivos (essa não é a definição padrão ), esse limite não se aplica a eles.';

 const F_TIP_ID_STATUS = '<b>Dica:</b> tenha cuidado ao alterar os IDs, pois cada pendência mantém seu ID de status antigo (exceto se esse ID não existir mais: neste caso, o status padrão será usado). ' ;
 const F_TIP_ID_LABEL = '<b>Tip:</b> tenha cuidado ao mudar os IDs, porque cada rótulo de uma edição mantém seu ID antigo (exceto se este ID não existir mais: neste caso, o rótulo é removido do problema).';
 const F_TIP_ID_GROUP = '<b>Dica:</b> tenha cuidado ao alterar os IDs, pois cada usuário mantém seu antigo ID de grupo (exceto se esse ID não existir mais: neste caso, o grupo padrão será usado). ' ;
 const F_TIP_CAPTCHA = 'Escolha as ações onde um captcha será mostrado para usuários não logados.';
 const F_TIP_API_ACCESS = 'Configurar o acesso à API no arquivo <em>/database/config_api.php</em>. Para mais informações consulte o arquivo API.md.';

 const F_API_ENABLE = 'Ativar API';

 const HELP_MARKDOWN = '
 <h2>Marcarsintaxe própria:</h2>

 <p>Parágrafos:</p>
<pre><code class="blank no-highlight">Os parágrafos são separados por uma ou mais linhas em branco.
É por isso que este texto será exibido na mesma linha da frase anterior, independentemente da quebra de linha.

Para iniciar uma nova linha sem criar um novo parágrafo:
insira 2 espaços antes da quebra de linha, como aqui.</code></pre>
 <p>Ênfase:</p>
<pre><code class="blank no-highlight">*Texto em itálico*
_Texto itático novamente_

**Texto em negrito**
__Texto em negrito novamente__ </code></pre>

 <p>Links:</p>
<pre><code class="blank no-highlight">Este é [um exemplo](http://example.com) de link incorporado.
Esse é outro: &lt;http://example.com&gt;.</code></pre>

 <p>Imagens:</p>
<pre><code class="blank no-highlight">![Eu sou uma imagem.](http://example.com/image.png)</code></pre>

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
<pre><code class="blank no-highlight">> Eu sou uma citação em bloco com dois parágrafos.
>
> Eu sou o segundo parágrafo.</code></pre>

 <p>Blocos de código:</p>
<pre><code class="blank no-highlight">Este é um `bloco de código incorporado`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Eu sou um bloco de código, porque estou recuado
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
 'description' => 'Você pode acessar a página inicial e visualizar a lista de todos os problemas em aberto para seus projetos.'
 ),
 'dashboard' => array(
 'title' => 'Painéis:',
 'description' => 'Você pode acessar os painéis dos projetos.'
 ),
 'issues' => array(
 'title' => 'Ver problemas:',
 'description' => 'Você pode visualizar problemas públicos.'
 ),
 'private_issues' => array(
 'title' => 'Exibir problemas privados:',
 'description' => 'Você pode visualizar problemas marcados como privados.'
 ),
 'search' => array(
 'title' => 'Pesquisar:',
 'description' => 'Você pode pesquisar problemas ou usuários.'
 ),
 'new_issue' => array(
 'title' => 'Novo problema:',
 'description' => 'Você pode enviar um novo problema.'
 ),
 'edit_issue' => array(
 'title' => 'Editar problemas:',
 'description' => 'Você pode editar o texto de todos os fascículos e excluí-los.'
 ),
 'update_issue' => array(
 'title' => 'Problemas de atualização:',
 'description' => 'Você pode atualizar problemas: alterar status, adicionar tags, fechar e reabrir, ...'
 ),
 'post_comment' => array(
 'title' => 'Postar um comentário:',
 'description' => 'Você pode postar um comentário.'
 ),
 'edit_comment' => array(
 'title' => 'Editar comentários:',
 'description' => 'Você pode editar todos os comentários (os usuários podem editar seus próprios comentários de qualquer maneira).'
 ),
 'view_user' => array(
 'title' => 'Perfis de usuário:',
 'description' => 'Você pode visualizar todos os perfis de usuário.'
 ),
 'upload' => array(
 'title' => 'Publicar um arquivo:',
 'description' => 'Você pode anexar arquivos a um comentário ou a um novo problema.'
 ),
 'view_upload' => array(
 'title' => 'Ver uploads:',
 'description' => 'Você pode acessar todos os arquivos enviados.'
 ),
 'settings' => array(
 'title' => 'Alterar configurações:',
 'description' => 'Você pode acessar esta página e modificar todas as configurações globais.'
 ),
 'signup' => array(
 'title' => 'Inscreva-se:',
 'description' => 'Pode se inscrever.'
 ),
 'view_errors' => array(
 'title' => 'Ver erros fatais:',
 'description' => 'Você pode visualizar a descrição de erros fatais.'
 )
 );

 public static function permissions($id, $type = 'description') {
 return self::$permissions[$id][$type];
 }

 private static $settings = array(
 'validate_url' => 'A URL não é válida.',
 'validate_email' => 'O e-mail não é válido.',
 'private_label_removed' => 'Você não pode remover a tag privada ou alterar seu ID, mas pode renomeá-la.',
 'default_status_removed' => 'Você não pode remover o estado padrão ou alterar seu ID, mas pode renomeá-lo.',
 'default_group_removed' => 'Você não pode remover o grupo padrão ou alterar seu ID, mas pode renomeá-lo.',
 'default_group_superuser_removed' => 'Você não pode remover o grupo de superusuários ou alterar seu ID, mas pode renomeá-lo.',
 'validate_same_username' => 'Aviso: dois usuários têm o mesmo nome de usuário.',
 'validate_same_project_name' => 'Dois projetos não podem ter o mesmo nome. Um foi renomeado automaticamente.',
 'language_modified' => 'Atualize esta página para visualizá-la no novo idioma.'
 );

 public static function settings($id) {
 return self::$settings[$id];
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