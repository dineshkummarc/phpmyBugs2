<?php

class Trad {

		# Words

	const W_ISSUE = 'Problema';
	const W_OPEN = 'Abrir';
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
	const W_DECADE = 'decad';
	const W_SECONDE_P = 'segundos';
	const W_MINUTE_P = 'minutos';
	const W_HOUR_P = 'horas';
	const W_DAY_P = 'dias';
	const W_WEEK_P = 'semanas';
	const W_MONTH_P = 'meses';
	const W_YEAR_P = 'anos';
	const W_DECADE_P = 'decads';

	const W_PREVIOUS = 'Anterior';
	const W_NEXT = 'Próximo';
	const W_CURRENT = 'Página% nb1% de% nb2%';

	const W_NOT_LOGGED = 'Não registrado';

	const W_SUSPENSION = '…';
	const W_EXTRACT = '“% text%”';

	const W_USER = 'Usuário';
	const W_DEVELOPPER = 'Desenvolvedor';
	const W_SUPERUSER = 'Superusuário';
	const W_S_NEW = 'Novo';
	const W_S_CONFIRMED = 'Confirmado';
	const W_S_ASSIGNED = 'Atribuído a% usuário%';
	const W_S_RESOLVED = 'Resolvido';
	const W_S_REJECTED = 'Rejeitado';
	const W_L_URGENT = 'Urgente';
	const W_L_IMPROVEMENT = 'Melhoria';
	const W_L_PRIVATE = 'Privado';

	const W_PROFILEPIC = 'imagem do perfil';

	const W_RSS = 'RSS feed';

		# Verbes

	const V_UPDATE = 'Atualizar';
	const V_UPDATE_DETAILS = 'Atualizar detalhes';
	const V_UPDATE_CONTENT = 'Atualizar conteúdo';
	const V_UPDATE_AND = 'Atualizar &% adjetivo%';
	const V_CANCEL = 'Cancelar';
	const V_PREVIEW = 'Preview';
	const V_COMMENT = 'Comentário';
	const V_SUBMIT = 'Enviar';
	const V_SELECT_FILE = 'Selecione um arquivo…';
	const V_UPLOADING = 'Enviando…';
	const V_SAVE_CONFIG = 'Salvar configurações';
	const V_APPLY = 'Aplicar';
	const V_EDIT = 'Editar';
	const V_SIGNUP = 'Inscreva-se';
	const V_CONTINUE = 'Continuar';
	const V_REMOVE_ISSUE = 'Excluir problema';
	const V_CLOSE = 'fechar';
	const V_REOPEN = 'reabrir';
	const V_EXPORT = 'Exportar dados brutos';

		# Sentencies

	const S_NOLABEL = '-';
	const S_NODEPENDENCY = '-';
	const S_COMMENT_LEAVE = 'Deixe um comentário:';
	const S_AGO = '% duration%% pediod% ago';
	const S_ISSUE_ABOUT = 'Sobre este assunto:';
	const S_UPLOAD_ADD = 'Anexar um arquivo:';
	const S_WELCOME = 'Bem-vindo,% user%';
	const S_NEVER = 'Nunca';
	const S_ME = 'De atualizações sobre questões em que contribuí';
	const S_ALWAYS = 'De cada atualização';
	const S_START_NOTIF = 'Ser notificado de novas atualizações';
	const S_STOP_NOTIF = 'Não ser mais notificado de atualizações';
	const S_NOTFOUND = 'A página que você está procurando não existe mais ...';
	const S_FORBIDDEN = 'Você não tem permissão para acessar esta página. Faça login / logout para continuar.';

	const S_VIEW_PARTICIPATION = 'Ver sua participação.';
	const S_VIEW_STATUS = 'Ver problemas “% status%”.';

	const S_ISSUE_CREATED = 'por% usuário%% time%';
	const S_ISSUE_UPDATED = '% adj% por% user%% time%.';
	const S_ISSUE_STATUS_UPDATED = 'Status atualizado para% status% por% user%% time%.';

	const S_RSS_ISSUE_UPDATED = '% adj% por% user%.';
	const S_RSS_ISSUE_STATUS_UPDATED = 'Status atualizado para “% status%” por% user%.';

	const S_INTRO_INSTALL = 'Parece que é a primeira vez que você executa o phpmyBugs! Por favor, configure-o: ';
	const S_FIRST_ISSUE_TITLE = 'Como vai, docinho?';
	const S_FIRST_ISSUE = 'Eu sou seu primeiro problema! Após o login, você poderá me deletar. ';

	const S_NO_USER = 'Nenhum usuário corresponde ao seu pedido.';
	const S_NO_ISSUE = 'Nenhum problema corresponde ao seu pedido.';
	const S_MATCHING_ISSUES = '% nb% problemas de correspondência';
	const S_NO_ACTIVITY = 'Nenhuma atividade recente.';
	const S_NO_UPLOAD = 'Sem upload.';
	const S_SIZE_REMAINING = '% permanecem% restantes no% total% permitido.';
	const S_NO_PROJECT = 'Nenhum projeto.';

	const S_SEARCH = '# 12, @ usuário, palavras…';
	const S_COPYRIGHT = 'Desenvolvido por% name%.';

	const S_LAST_UPDATES = 'Últimas atualizações…';

		# Alerts

	const A_ERROR_DIRECTORY = '<strong> Erro: </strong> não foi possível criar o diretório “% name%”.';
	const A_ERROR_FILE = '<strong> Erro: </strong> não foi possível ler o arquivo “% name%”.';
	const A_ERROR_FILE_WRITE = '<strong> Erro: </strong> não foi possível gravar o arquivo “% name%”.';
	const A_ERROR_FATAL = 'Desculpe, algo deu errado. Entre em contato com um administrador se o problema persistir. ';
	const A_ERROR = '<strong>% title%: </strong> <br /> <br />% message% <br /> <br /> Arquivo “<strong>% file% </strong>” on-line < forte>% line% </strong>. ';

	const A_SUCCESS_INSTALL = '<strong> Concluído: </strong> phpmyBugs agora está completamente configurado.';
	const A_ERROR_INSTALL = '<strong> Erro: </strong> phpmyBugs já está configurado. Remova o arquivo de configuração se desejar redefinir a configuração. ';
	const A_MODIF_SAVED = 'Modificações foram salvas.';

	const A_ERROR_FORM = 'Ocorreu um erro. Envie novamente o formulário. ';
	const A_ERROR_TOKEN = 'Token errado. Envie novamente o formulário. ';
	const A_ERROR_EMPTY = 'Você deve especificar um nome de usuário e uma senha.';
	const A_ERROR_SAME_USERNAME = 'Este nome de usuário não está disponível.';
	const A_SUCCESS_SIGNUP = '<strong> Concluído: </strong> Agora você pode fazer o login.';

	const A_CONFIRM_DELETE_COMMENT = 'Tem certeza que deseja deletar este comentário?';
	const A_SUCCESS_DELETE_COMMENT = 'O comentário foi apagado.';
	const A_CONFIRM_DELETE_ISSUE = 'Tem certeza que deseja excluir este problema?';
	const A_SUCCESS_DELETE_ISSUE = 'O problema foi excluído.';
	const A_CONFIRM_DELETE_UPLOAD = 'Tem certeza que deseja deletar este arquivo?';
	const A_CONFIRM_DELETE_PROJECT = 'Tem certeza que deseja deletar este projeto? Todas as edições correspondentes serão perdidas.';

	const A_LOGGED = 'Agora você está logado no sistema.';
	const A_LOGGED_OUT = 'Você agora está desconectado do sistema.';
	const A_ERROR_CONNEXION = '<strong> Erro: </strong> Nome de usuário ou senha incorretos.';
	const A_ERROR_CONNEXION_WAIT = '<strong> Erro: </strong> Nome de usuário ou senha incorretos. Aguarde% duration%% period% antes de tentar novamente. ';
	const A_ERROR_LOGIN_WAIT = 'Por favor, aguarde% duration%% period% antes de tentar novamente. Esta é uma proteção contra ataques maliciosos. ';

	const A_ERROR_UPLOAD = 'Ocorreu um erro. Por favor, tente novamente.';
	const A_ERROR_UPLOAD_SIZE = 'Arquivo excede o tamanho máximo permitido (% nb% max).';
	const A_ERROR_UPLOAD_FULL = 'Você não tem espaço em disco suficiente para enviar este arquivo:% nb% restante.';

	const A_PLEASE_LOGIN_ISSUES = 'Faça o login para ver os problemas.';
	const A_PLEASE_LOGIN_COMMENT = 'Por favor, faça o login para postar um comentário. Ainda não tem conta? Crie um: é grátis e muito rápido! ';
	const A_PLEASE_LOGIN_ISSUE = 'Por favor, faça o login para enviar um problema. Ainda não tem conta? Crie um: é grátis e muito rápido! ';
	const A_SHOULD_LOGIN = 'Se você tem uma conta, faça o login. Se não, considere criar uma: é grátis e muito rápido!';

	const A_IE = 'Seu navegador está obsoleto: <a href="http://www.browserchoice.eu"> atualize ou altere-o </a>.';

		# Mails

	const M_NEW_COMMENT_O = '[% title% -% project% - Problema #% id%] Novo comentário';
	const M_NEW_COMMENT = 'Olá,% username%!

	O problema #% id% - “% summary%” acabou de ser comentado por% por%. Você pode ler o novo comentário aqui:
	% url%.

	Se você não quiser receber mais notificações sobre este assunto, uma opção está disponível (após o login) através do link acima.

	-----
	Este é um e-mail automático, não responda.
	';

	const M_NEW_ISSUE_O = '[% title% -% project%] Novo problema';
	const M_NEW_ISSUE = 'Olá,% username%!

	O problema #% id% - “% summary%” acaba de ser enviado por% por%. Você pode lê-lo aqui:
	% url%.

	Se você não quiser receber mais notificações sobre este assunto, uma opção está disponível (após o login) através do link acima.

	-----
	Este é um e-mail automático, não responda.
	';

		# Titles

	const T_INSTALLATION = 'Instalação';
	const T_SETTINGS = 'Configurações';
	const T_GLOBAL_SETTINGS = 'Configurações globais';
	const T_APPEARANCE = 'Aparência';
	const T_ISSUES = 'Problemas';
	const T_GROUPS = 'Grupos';
	const T_USERS = 'Usuários';
	const T_BROWSE_ISSUES = 'Procurar problemas';
	const T_NEW_ISSUE = 'Novo problema';
	const T_PROJECTS = 'Projetos';
	const T_DASHBOARD = 'Painel';
	const T_LAST_UPDATES = 'Últimas atualizações';
	const T_LAST_ACTIVITY = 'Última atividade';
	const T_UPLOADS = 'Uploads';
	const T_SEARCH = 'Pesquisar';

		# FORMS

	const F_USERNAME = 'Nome de usuário:';
	const F_PASSWORD = 'Senha:';
	const F_USERNAME2 = 'Nome de usuário';
	const F_PASSWORD2 = 'Senha';
	const F_NAME = 'Nome:';
	const F_URL = 'Url:';
	const F_URL_REWRITING = 'Reescrevendo Url:';
	const F_INTRO = 'Introdução:';
	const F_DESCRIPTION = 'Descrição:';
	const F_EMAIL = 'Email:';
	const F_MAX_UPLOAD = 'Tamanho máximo por upload:';
	const F_ALLOCATED_SPACE = 'Espaço alocado por usuário:';
	const F_GROUP = 'Grupo:';
	const F_NOTIFICATIONS = 'Seja notificado:';
	const F_PROJECT_X = 'Projeto “% name%”:';
	const F_LANGUAGE = 'Idioma:';
	const F_LOGS = 'Logs:';

	const F_ISSUES_PAGE = 'Problemas por página:';
	const F_ISSUES_PAGE_SEARCH = 'Problemas por página (pesquisa):';
	const F_PREVIEW_ISSUE = 'Duração das visualizações (questões):';
	const F_PREVIEW_SEARCH = 'Comprimento das visualizações (pesquisa):';
	const F_PREVIEW_PROJECT = 'Duração das visualizações (projetos):';
	const F_LAST_EDITS = 'Número de problemas exibidos nos painéis:';
	const F_LAST_ACTIVITY = 'Número de problemas exibidos nas páginas do usuário:';

	const F_ADD_PROJECT = 'Novo projeto';
	const F_ADD_COLOR = 'Nova cor';
	const F_ADD_STATUS = 'Novo status';
	const F_ADD_LABEL = 'Novo rótulo';
	const F_ADD_GROUP = 'Novo grupo';
	const F_ADD_USER = 'Novo usuário';

	const F_SORT_BY = 'Classificar por:';
	const F_SORT_ID = 'ID';
	const F_SORT_MOD = 'última atualização';
	const F_SORT_DESC = 'descendente';
	const F_SORT_ASC = 'ascendente';
	const F_FILTER_STATUSES = 'Filtrar status:';
	const F_FILTER_STATES = 'Filtrar estados:';
	const F_FILTER_LABELS = 'Filtrar rótulos:';
	const F_FILTER_USERS = 'Filtrar usuários:';

	const F_WRITE = 'Escrever:';
	const F_SUMMARY = 'Resumo';
	const F_CONTENT = 'Conteúdo';

	const F_STATUS = 'Status:';
	const F_RELATED = 'Relacionado:';
	const F_LABELS2 = 'Etiquetas:';

	const F_GENERAL_SETTINGS = 'Configurações gerais:';
	const F_PROJECTS = 'Projetos:';
	const F_DATABASE = 'Banco de dados:';
	const F_UPLOADS = 'Uploads:';
	const F_COLORS = 'Gerenciar cores:';
	const F_DISPLAY = 'Gerenciar display:';
	const F_STATUSES = 'Gerenciar status:';
	const F_LABELS = 'Gerenciar rótulos:';
	const F_GROUPS = 'Gerenciar grupos:';
	const F_PERMISSIONS = 'Gerenciar permissões:';
	const F_USERS = 'Gerenciar usuários:';

	const F_TIP_NAME = 'Será mostrado no cabeçalho de cada página.';
	const F_TIP_URL_REWRITING = 'Deixe este campo vazio para desabilitar a reescrita de url. Caso contrário, deve conter o caminho para a pasta phpmyBugs (iniciada e terminada com "/"), relativa ao nome do domínio. ';
	const F_TIP_INTRO = 'Será mostrado na página inicial. Ele será analisado com a sintaxe Markdown. Nota: se houver apenas um projeto com o nome “% name%”, a página inicial é automaticamente redirecionada para o painel do projeto, e este texto não será exibido. ';
	const F_TIP_EMAIL = 'Deixe este campo vazio para desabilitar as notificações por email. Caso contrário, este endereço será usado como remetente ao enviar uma notificação por email. ';
	const F_TIP_PASSWORD = 'Deixe em branco se não quiser alterar a senha.';
	const F_TIP_USER_EMAIL = 'Requerido somente se você deseja receber notificações.';
	const F_TIP_NOTIFICATIONS = 'Esta é uma configuração padrão: você poderá alterá-la para cada problema.';
	const F_TIP_NOTIFICATIONS_DISABLED = 'Nota: as notificações estão atualmente desabilitadas pelo administrador.';
	const F_TIP_DESCRIPTION = 'Será mostrado no painel do projeto. Será analisado com a sintaxe de redução.';

	const F_TIP_MAX_UPLOAD = 'Cada arquivo enviado não pode exceder este tamanho.';
	const F_TIP_ALLOCATED_SPACE = 'Um usuário não pode fazer upload de outros arquivos depois de atingir este limite. <br /> <em> Atenção: </em> se nenhum usuário logado tiver permissão para fazer upload de arquivos (esta não é a configuração padrão), este limite não se aplica a eles. ';

	const F_TIP_ID_STATUS = '<b> Dica: </b> tenha cuidado ao alterar os IDs, pois cada problema mantém seu ID de status antigo (exceto se este ID não existir mais: neste caso, o status padrão será usado). ';
	const F_TIP_ID_LABEL = '<b> Dica: </b> tenha cuidado ao alterar os IDs, pois cada rótulo de um problema mantém seu ID antigo (exceto se este ID não existir mais: neste caso, o rótulo é removido do questão).';
	const F_TIP_ID_GROUP = '<b> Dica: </b> tenha cuidado ao mudar os IDs, pois cada usuário mantém seu ID de grupo antigo (exceto se este ID não existir mais: neste caso, o grupo padrão será usado). ';

	const HELP_MARKDOWN = '
<h2> Sintaxe de Markdown: </h2>

<p> Parágrafos: </p>
<pre> <code class = "blank no-highlight"> Os parágrafos são separados por uma ou mais linhas em branco.
É por isso que este texto será exibido na mesma linha que a frase anterior, independentemente da quebra de linha.

Para iniciar uma nova linha sem criar um novo parágrafo:
insira 2 espaços antes da quebra de linha, como aqui. </code> </pre>
<p> Ênfase: </p>
<pre> <code class = "blank no-highlight"> * Texto em itálico *
_Texto itático novamente_

**Texto em negrito**
__Boldtexto novamente__ </code> </pre>

<p> Links: </p>
<pre> <code class = "blank no-highlight"> Este é [um exemplo] (http://example.com) de link embutido.
Este é outro: & lt; http: //example.com&gt ;. </code> </pre>

<p> Imagens: </p>
<pre> <code class = "blank no-highlight">! [Eu sou uma imagem.] (http://example.com/image.png) </code> </pre>

<p> Cabeçalhos: </p>
<pre> <code class = "blank no-highlight"> # Título de nível superior
## Título de segundo nível
### Título de terceiro nível
#### Título de quarto nível </code> </pre>

<p> Listas: </p>
<pre> <code class = "blank no-highlight"> - um item
* outro

1. primeiro item
2. segundo item </code> </pre>

<p> Blockquotes: </p>
<pre> <code class = "blank sem destaque" >> Eu sou um blockquote com dois parágrafos.
>
> Eu sou o segundo parágrafo. </code> </pre>

<p> Blocos de código: </p>
<pre> <code class = "blank no-highlight"> Este é um `bloco de código embutido`. </code> </pre>
<pre> <code class = "blank no-highlight"> & lt;? php echo "Sou um bloco de código, porque estou indentado
    com 4 espaços ";? & gt; </code> </pre>
<pre> <code class = "blank no-highlight"> `` `
& lt;? php echo "Sou um bloco de código."; ? & gt;
`` `

`` `php
& lt;? php echo "As linguagens suportadas são: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ? & gt;
`` `</code> </pre>
';

	private static $permissions = array(
		'home' => array (
		'title' => 'Home:',
		'description' => 'Pode acessar a página inicial.'
		),
		'dashboard' => array (
		'title' => 'Painéis:',
		'description' => 'Pode acessar os painéis dos projetos.'
		),
		'issues' => array (
		'title' => 'Ver problemas:',
		'description' => 'Pode visualizar questões públicas.'
		),
		'private_issues' => array (
		'title' => 'Ver questões privadas:',
		'description' => 'Pode ver os problemas marcados como privados.'
		),
		'search' => array (
		'title' => 'Pesquisar:',
		'description' => 'Pode pesquisar problemas ou usuários.'
		),
		'new_issue' => array (
		'title' => 'Novo problema:',
		'description' => 'Pode enviar um novo problema.'
		),
		'edit_issue' => array (
		'title' => 'Editar problemas:',
		'description' => 'Pode editar o texto de todos os problemas e excluí-los.'
		),
		'update_issue' => array (
		'title' => 'Atualizar problemas:',
		'description' => 'Pode atualizar problemas: alterar status, adicionar rótulos, fechar e reabrir, ...'
		),
		'post_comment' => array (
		'title' => 'Postar um comentário:',
		'descrição' => 'Pode postar um comentário.'
		),
		'edit_comment' => array (
		'title' => 'Editar comentários:',
		'description' => 'Pode editar todos os comentários (os usuários podem editar seus próprios comentários de qualquer maneira).'
		),
		'view_user' => array (
		'title' => 'Perfis de usuário:',
		'description' => 'Pode ver todos os perfis de usuário.'
		),
		'upload' => array (
		'title' => 'Postar um arquivo:',
		'description' => 'Pode anexar arquivos a um comentário ou um novo problema.'
		),
		'view_upload' => array (
		'title' => 'Exibir uploads:',
		'description' => 'Pode acessar todos os arquivos enviados.'
		),
		'settings' => array (
		'title' => 'Alterar configurações:',
		'description' => 'Pode acessar esta página e modificar todas as configurações globais.'
		),
		'signup' => array (
		'title' => 'Inscreva-se:',
		'description' => 'Pode se inscrever.'
		),
		'view_errors' => array (
		'title' => 'Ver erros fatais:',
		'description' => 'Pode ver a descrição de erros fatais.'
		)
	);

	public static function permissions($id, $type = 'description') {
		return self::$permissions[$id][$type];
	}

	private static $settings = array(
		'validate_url' => 'O url não é válido.',
		'validate_email' => 'O email não é válido.',
		'private_label_removed' => 'Você não pode remover o rótulo privado ou alterar seu ID, mas pode renomeá-lo.',
		'default_status_removed' => 'Você não pode remover o status padrão ou alterar seu ID, mas pode renomeá-lo.',
		'default_group_removed' => 'Você não pode remover o grupo padrão ou alterar seu ID, mas você pode renomeá-lo.',
		'default_group_superuser_removed' => 'Você não pode remover o grupo de superusuário ou alterar seu ID, mas você pode renomeá-lo.',
		'validate_same_username' => 'Aviso: dois usuários têm o mesmo nome de usuário.',
		'validate_same_project_name' => 'Dois projetos não podem ter o mesmo nome. Um foi renomeado automaticamente. ',
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
		E_DEPRECATED => 'Obsoleto',
		'default' => 'Erro'
	);
	public static function errors($no) {
		return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
	}
}

?>