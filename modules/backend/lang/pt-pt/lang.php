<?php

return [
    'auth' => [
        'title' => 'Área Administrativa',
    ],
    'field' => [
        'invalid_type' => 'Invalid field type used :type.',
        'options_method_invalid_model' => "O atributo ':field' não é resolvido para um modelo válidol. Tente especificar o método de opções para a classe de modelo :model explicitamente.",
        'options_method_not_exists' => "A classe de modelo :model deve definir um método :method() retornando opções para o campo de formulário ':field'."
    ],
    'widget' => [
        'not_registered' => 'Uma classe de widget com o nome ":name" não foi registada',
        'not_bound' => 'Um widget da classe ":name" não foi ligado ao controlador',
    ],
    'page' => [
        'untitled' => 'Sem título',
        'access_denied' => [
            'label' => 'Acesso negado',
            'help' => 'Não tem as permissões necessárias para visualizar esta página.',
            'cms_link' => 'Regressar à área administrativa',
        ],
        'no_database' => [
            'label' => 'Base de dados não existente',
            'help' => "Uma base de dados é necessária para acesso ao back-end. Verifique se a base dados se encontra configurada e migrada antes de tentar novamente.",
            'cms_link' => 'Regressar á página inicial'
        ],
        'invalid_token' => [
            'label' => 'Token de segurança inválido'
        ]
    ],
    'partial' => [
        'not_found_name' => 'O bloco ":name" não foi encontrado.',
    ],
    'account' => [
        'sign_out' => 'Sair',
        'login' => 'Entrar',
        'reset' => 'Redefinir',
        'restore' => 'Restaurar',
        'login_placeholder' => 'Utilizador',
        'password_placeholder' => 'Senha',
        'forgot_password' => 'Esqueceu sua senha?',
        'enter_email' => 'Coloque o seu email',
        'enter_login' => 'Coloque o nome de utilizador',
        'email_placeholder' => 'E-mail',
        'enter_new_password' => 'Coloque uma nova senha',
        'password_reset' => 'Redefinir sua senha',
        'restore_success' => 'Um e-mail com instruções para redefinir a sua senha foi enviado ao seu endereço de e-mail.',
        'restore_error' => 'O utilizador ":login" não foi encontrado',
        'reset_success' => 'Sua senha foi redefinida com sucesso. Já pode entrar novamente.',
        'reset_error' => 'A senha redefinida é inválida. Por favor, tente de novo!',
        'reset_fail' => 'Falha ao redefinir sua senha!',
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'delete' => 'Apagar',
        'ok' => 'Ok',
    ],
    'dashboard' => [
        'menu_label' => 'Painel',
        'widget_label' => 'Widget',
        'widget_width' => 'Width',
        'full_width' => 'full width',
        'manage_widgets' => 'Manage widgets',
        'add_widget' => 'Add widget',
        'widget_inspector_title' => 'Widget configuration',
        'widget_inspector_description' => 'Configure the report widget',
        'widget_columns_label' => 'Width :columns',
        'widget_columns_description' => 'The widget width, a number between 1 and 10.',
        'widget_columns_error' => 'Please enter the widget width as a number between 1 and 10.',
        'columns' => '{1} column|[2,Inf] columns',
        'widget_new_row_label' => 'Force new row',
        'widget_new_row_description' => 'Put the widget in a new row.',
        'widget_title_label' => 'Widget title',
        'widget_title_error' => 'The Widget Title is required.',
        'reset_layout' => 'Reset layout',
        'reset_layout_confirm' => 'Reset layout back to default?',
        'reset_layout_success' => 'Layout has been reset',
        'make_default' => 'Make default',
        'make_default_confirm' => 'Set the current layout as the default?',
        'make_default_success' => 'Current layout is now the default',
        'collapse_all' => 'Contrair todos',
        'expand_all' => 'Expandir todos ',
        'status' => [
            'widget_title_default' => 'Estado do Sistema',
            'update_available' => '{0} actualizações disponíveis!|{1} actualização disponível!|[2,Inf] actualizações disponíveis!',
            'updates_pending' => 'Actualizações de softwares pendentes',
            'updates_nil' => 'O software já está actualizado',
            'updates_link' => 'Actualizar',
            'warnings_pending' => 'Algumas questões precisam de atenção',
            'warnings_nil' => 'Nenhuma advertência para mostrar',
            'warnings_link' => 'Visualizar',
            'core_build' => 'Versão do sistema',
            'event_log' => 'Registo de eventos',
            'request_log' => 'Registo de requisições',
            'app_birthday' => 'No ar desde',
        ],
        'welcome' => [
            'widget_title_default' => 'Bem-vindo',
            'welcome_back_name' => 'Seja bem vindo no seu regresso ao :app, :name.',
            'welcome_to_name' => 'Bem vindo ao :app, :name.',
            'first_sign_in' => 'Esta é a primeira vez que acede à área administrativa.',
            'last_sign_in' => 'O último acesso foi em',
            'view_access_logs' => 'Visualizar registos de acesso',
            'nice_message' => 'Tenha um excelente dia!',
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administrators',
        'menu_description' => 'Manage back-end administrator users, groups and permissions.',
        'list_title' => 'Manage Administrators',
        'new' => 'New Administrator',
        'login' => 'Login',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'full_name' => 'Full Name',
        'email' => 'Email',
        'groups' => 'Groups',
        'groups_comment' => 'Specify which groups the account should belong to. Groups define user permissions, which can be overriden on the user level, on the Permissions tab.',
        'avatar' => 'Avatar',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'permissions' => 'Permissions',
        'account' => 'Account',
        'superuser' => 'Super User',
        'superuser_comment' => 'Grants this account unlimited access to all areas of the system. Super users can add and manage other users. ',
        'send_invite' => 'Send invitation by email',
        'send_invite_comment' => 'Sends a welcome message containing login and password information.',
        'delete_confirm' => 'Delete this administrator?',
        'return' => 'Return to admin list',
        'allow' => 'Allow',
        'inherit' => 'Inherit',
        'deny' => 'Deny',
        'activated' => 'Activado',
        'last_login' => 'Última entrada',
        'created_at' => 'Criado em',
        'updated_at' => 'Modificado em',
        'group' => [
            'name' => 'Grupo',
            'name_comment' => 'O nome é exibido na lista de grupos ao criar/alterar um administrador.',
            'name_field' => 'Nome',
            'description_field' => 'Descrição',
            'is_new_user_default_field_label' => 'Grupo padrão',
            'is_new_user_default_field_comment' => 'Adicionar novos administradores a este grupo por padrão',
            'code_field' => 'Código',
            'code_comment' => 'Insira um código exclusivo se quiser utilizar o mesmo com a API.',
            'menu_label' => 'Grupos',
            'list_title' => 'Gerir grupos',
            'new' => 'Novo grupo administrador',
            'delete_confirm' => 'Você realmente deseja apagar este grupo?',
            'return' => 'Voltar para a lista de grupos',
            'users_count' => 'Utilizadores'
        ],
        'preferences' => [
            'not_authenticated' => 'Nenhum utilizador autenticado para carregar as preferências.',
        ],
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Pesquisar...',
        'no_records' => 'Nenhum registo encontrado.',
        'missing_model' => 'A lista usada em :class não tem um modelo definido.',
        'missing_column' => 'Não existe definição de coluna para :columns.',
        'missing_columns' => 'A lista utilizada em :class não possui colunas de lista definidas.',
        'missing_parent_definition' => "Comportamento de lista não possui uma definição para ':definition'.",
        'missing_definition' => 'Lista não possui uma coluna para ":field".',
        'behavior_not_ready' => 'Lista não foi inicializada. Verifique se você chamou makeLists() no controlador.',
        'invalid_column_datetime' => 'Valor da coluna ":column" não é um objeto DateTime, esqueceu de referênciar \$dates no modelo?',
        'pagination' => 'Registos exibidos: :from-:to de :total',
        'first_page' => 'Primeira página',
        'last_page' => 'Última página',
        'prev_page' => 'Anterior',
        'next_page' => 'Próxima',
        'refresh' => 'Actualizar',
        'updating' => 'Actualizando...',
        'loading' => 'Carregando...',
        'setup_title' => 'Configuração de Lista',
        'setup_help' => 'Seleccione as colunas que deseja ver na lista. Você pode alterar as posições das colunas arrastando-as para cima ou para baixo.',
        'records_per_page' => 'Registos por página',
        'records_per_page_help' => 'Escolha o número de registos a mostrar por página. Note que um número elevado de registos por página pode reduzir a performance.',
        'check' => 'Marcar',
        'delete_selected' => 'Apagar seleccionado',
        'delete_selected_empty' => 'Não há registos seleccionados para apagar.',
        'delete_selected_confirm' => 'Apagar os registos selecionados?',
        'delete_selected_success' => 'Registos seleccionados apagados com sucesso.',
        'column_switch_true' => 'Sim',
        'column_switch_false' => 'Não'
    ],
    'fileupload' => [
        'attachment' => 'Anexo',
        'help' => 'Adicione um título e descrição a este anexo.',
        'title_label' => 'Título',
        'description_label' => 'Descrição',
        'default_prompt' => 'Clique em %s ou arraste um ficheiro para cá para enviar',
        'attachment_url' => 'Anexar URL',
        'upload_file' => 'Enviar ficheiro',
        'upload_error' => 'Erro ao enviar',
        'remove_confirm' => 'Tem a certeza?',
        'remove_file' => 'Remover ficheiro'
    ],
    'form' => [
        'create_title' => 'Novo :name',
        'update_title' => 'Editar :name',
        'preview_title' => 'Visualizar :name',
        'create_success' => ':name foi criado com sucesso',
        'update_success' => ':name foi actualizado com sucesso',
        'delete_success' => ':name foi apagado com sucesso',
        'reset_success' => 'Reinicialização completa',
        'missing_id' => 'O ID do registo não foi fornecido',
        'missing_model' => 'Formulário utilizado na classe :class não tem um modelo definido.',
        'missing_definition' => 'Formulário não contém um campo ":field".',
        'not_found' => 'Nenhum registo encontrado com o ID :id',
        'action_confirm' => 'Tem a certeza?',
        'create' => 'Criar',
        'create_and_close' => 'Criar e sair',
        'creating' => 'Criando...',
        'creating_name' => 'Criando :name...',
        'save' => 'Guardar',
        'save_and_close' => 'Guardar e fechar',
        'saving' => 'Guardando...',
        'saving_name' => 'Guardando :name...',
        'delete' => 'Apagar',
        'deleting' => 'Apagando...',
        'confirm_delete' => 'Realmente deseja apagar este registo?',
        'confirm_delete_multiple' => 'Realmente deseja apagar os registos seleccionados?',
        'deleting_name' => 'Apagando :name...',
        'reset_default' => 'Redefinir para o padrão',
        'resetting' => 'Redefinindo',
        'resetting_name' => 'Redefinindo :name',
        'undefined_tab' => 'Outros',
        'field_off' => 'Desl',
        'field_on' => 'Lig',
        'add' => 'Adicionar',
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'close' => 'Fechar',
        'confirm' => 'Confirmar',
        'reload' => 'Recarregar',
        'complete' => 'Concluído',
        'ok' => 'Ok',
        'or' => 'ou',
        'confirm_tab_close' => 'Tem a certeza que deseja fechar esse separador? As alterações que não foram guardadas serão perdidas',
        'behavior_not_ready' => 'O formulário não foi inicializado. Verifique se você chamou initForm() no controlador.',
        'preview_no_files_message' => 'Os ficheiros não foram carregados',
        'preview_no_media_message' => 'Nenhum conteúdo selecionado.',
        'preview_no_record_message' => 'Nenhum registo selecionado.',
        'select' => 'Selecionar',
        'select_all' => 'todos',
        'select_none' => 'nenhum',
        'select_placeholder' => 'por favor, selecione',
        'insert_row' => 'Inserir linha',
        'insert_row_below' => 'Inserir linha abaixo',
        'delete_row' => 'Apagar linha',
        'concurrency_file_changed_title' => 'O ficheiro foi alterado',
        'concurrency_file_changed_description' => 'O ficheiro que está editando foi alterado em disco. Pode recarregá-lo e perder suas alterações ou sobrescrever o ficheiro do disco.',
        'return_to_list' => 'Regressar à lista',
    ],
    'recordfinder' => [
        'find_record' => 'Localizar Registo',
        'cancel' => 'Cancelar',
    ],
    'pagelist' => [
        'page_link' => 'Ligação de página',
        'select_page' => 'Escolha uma página...'
    ],
    'relation' => [
        'missing_config' => 'Comportamento da relação não tem uma configuração para ":config".',
        'missing_definition' => 'Comportamento da relação não contém uma definição para ":field".',
        'missing_model' => 'Comportamento da relação utilizado na classe :class não possui um modelo definido.',
        'invalid_action_single' => 'Essa acção não pode ser realizada num relacionamento singular.',
        'invalid_action_multi' => 'Essa acção não pode ser realizada num relacionamento múltiplo.',
        'help' => 'Clique em um item para adicionar',
        'related_data' => 'Dados de :name relacionado',
        'add' => 'Adicionar',
        'add_selected' => 'Adicionar seleção',
        'add_a_new' => 'Adicionar um(a) novo(a) :name',
        'link_selected' => 'Vincular selecionado',
        'link_a_new' => 'Vincular um novo :name',
        'cancel' => 'Cancelar',
        'close' => 'Fechar',
        'add_name' => 'Adicionar :name',
        'create' => 'Criar',
        'create_name' => 'Criar :name',
        'update' => 'Actualizar',
        'update_name' => 'Actualizar :name',
        'preview' => 'Visualizar',
        'preview_name' => 'Visualizar :name',
        'remove' => 'Remover',
        'remove_name' => 'Remover :name',
        'delete' => 'Apagar',
        'delete_name' => 'Apagar :name',
        'delete_confirm' => 'Tem a certeza?',
        'link' => 'Vincular',
        'link_name' => 'Vincular :name',
        'unlink' => 'Desvincular',
        'unlink_name' => 'Desvincular :name',
        'unlink_confirm' => 'Tem a certeza?',
    ],
    'reorder' => [
        'default_title' => 'Reordenar registos',
        'no_records' => 'Não há registos disponíveis para ordenar.',
    ],
    'model' => [
        'name' => 'Modelo',
        'not_found' => 'O modelo ":class" com ID :id não foi encontrado',
        'missing_id' => 'ID do registo não especificado.',
        'missing_relation' => 'O modelo ":class" não contém uma definição para o relacionamento ":relation".',
        'missing_method' => 'O modelo ":class" não contém o método ":method".',
        'invalid_class' => 'O modelo :model utilizado na classe :class não é válido. É necessário herdar a classe \Model.',
        'mass_assignment_failed' => 'Falha na atribuição em massa do atributo ":attribute" do modelo.',
    ],
    'warnings' => [
        'tips' => 'Dicas de configuração do sistema',
        'tips_description' => 'Há itens que requerem atenção para configurar o sistema corretamente.',
        'permissions'  => 'Diretoria :name ou suas subdiretorias não são graváveis pelo PHP. Por favor, defina permissões de escrita para o servidor nesta diretoria.',
        'extension' => 'A extensão PHP :name não está instalada. Por favor, instale esta biblioteca para activar a extensão.',
        'plugin_missing' => 'A extensão :name é uma dependência mas não está instalada. Por favor instale esta extensão.',
    ],
    'editor' => [
        'menu_label' => 'Definições do Editor',
        'menu_description' => 'Gerir configurações globais do editor, como tamanho de fonte ou esquema de cores',
        'font_size' => 'Tamanho da fonte',
        'tab_size' => 'Tamanho do tabulação',
        'use_hard_tabs' => 'Recuo usando guias',
        'code_folding' => 'Código flexível',
        'code_folding_begin' => 'Marca de início',
        'code_folding_begin_end' => 'Marca de início e fim',
        'autocompletion' => 'Autocompletar',
        'word_wrap' => 'Quebra de linha',
        'highlight_active_line' => 'Destaque na linha ativa',
        'auto_closing' => 'Fechar etiquetas automáticamente',
        'show_invisibles' => 'Mostrar caracteres invisíveis',
        'show_gutter' => 'Mostrar guias',
        'basic_autocompletion'=> 'Autocompletar básico (Ctrl + Espaço)',
        'live_autocompletion'=> 'Autocompletar em tempo real',
        'enable_snippets'=> 'Activar trechos de códigos (Tab)',
        'display_indent_guides'=> 'Mostrar guias de indentação',
        'show_print_margin'=> 'Mostrar margem de impressão',
        'mode_off' => 'Desligado',
        'mode_fluid' => 'Fluido',
        '40_characters' => '40 caracteres',
        '80_characters' => '80 caracteres',
        'theme' => 'Esquema de cores',
        'markup_styles' => 'Estilos de marcação',
        'custom_styles' => 'Folha de estilo personalizada',
        'custom styles_comment' => 'Estilos personalizados para incluir no editor HTML.',
        'markup_classes' => 'Classes de marcação',
        'paragraph' => 'Parágrafo',
        'link' => 'Ligação',
        'table' => 'Tabela',
        'table_cell' => 'Célula de tabela',
        'image' => 'Imagem',
        'label' => 'Rótulo',
        'class_name' => 'Nome da classe',
        'markup_tags' => 'Etiquetas de marcação',
        'allowed_empty_tags' => 'Permitir etiquetas vazias',
        'allowed_empty_tags_comment' => 'A lista de etiquetas que não é removida quando não há conteúdo.',
        'allowed_tags' => 'Etiquetas permitidas',
        'allowed_tags_comment' => 'Lista de etiquetas permitidas.',
        'no_wrap' => 'Não envolva as etiquetas',
        'no_wrap_comment' => 'Lista de etiquetas que não devem ser envolvidas num bloco de etiquetas.',
        'remove_tags' => 'Apagar etiquetas',
        'remove_tags_comment' => 'Lista de etiquetas que serão excluídas incluíndo o conteúdo.',
    ],
    'tooltips' => [
        'preview_website' => 'Prévisualizar a página'
    ],
    'mysettings' => [
        'menu_label' => 'As minhas configurações',
        'menu_description' => 'Configurações relacionadas com sua conta de administrador',
    ],
    'myaccount' => [
        'menu_label' => 'Minha Conta',
        'menu_description' => 'Actualizar detalhes da sua conta, como nome, e-mail e senha.',
        'menu_keywords' => 'login de segurança'
    ],
    'branding' => [
        'menu_label' => 'Personalização',
        'menu_description' => 'Personalizar detalhes da área administrativa, tais como título, cores e logo.',
        'brand' => 'Marca',
        'logo' => 'Logo',
        'logo_description' => 'Fazer carregamento de um logótipo para usar na área administrativa.',
        'app_name' => 'Nome da Aplicação',
        'app_name_description' => 'Este nome é mostrado no título da área administrativa.',
        'app_tagline' => 'Slogan do Aplicativo',
        'app_tagline_description' => 'Esta frase é mostrada no ecran de entrada administrativo.',
        'colors' => 'Cores',
        'primary_color' => 'Cor primária',
        'secondary_color' => 'Cor secundária',
        'accent_color' => 'Cor destacada',
        'styles' => 'Estilos',
        'custom_stylesheet' => 'CSS personalizado',
        'navigation' => 'Navegação',
        'menu_mode' => 'Estilo de menu',
        'menu_mode_inline' => 'Em linha',
        'menu_mode_tile' => 'Blocos',
        'menu_mode_collapsed' => 'Colapsados'
    ],
    'backend_preferences' => [
        'menu_label' => 'Preferências da Administração',
        'menu_description' => 'Gerir idiomas e aparência da administração.',
        'region' => 'Região',
        'code_editor' => 'Editor de código',
        'timezone' => 'Fuso horário',
        'timezone_comment' => 'Ajustar datas exibidas para este fuso horário.',
        'locale' => 'Idioma',
        'locale_comment' => 'Selecione o idioma de sua preferência.',
    ],
    'access_log' => [
        'hint' => 'Este registo mostra a lista de acessos dos administradores. Os registros são mantidos por um período de :days dias.',
        'menu_label' => 'Registo de Acesso',
        'menu_description' => 'Veja a lista de acessos à administração.',
        'created_at' => 'Data & Hora',
        'login' => 'Entrada',
        'ip_address' => 'Endereço IP',
        'first_name' => 'Nome',
        'last_name' => 'Sobrenome',
        'email' => 'E-mail',
    ],
    'filter' => [
        'all' => 'todos',
        'options_method_not_exists' => "A classe modelo :model deve definir um método :method() retornando opções para o filtro ':filter'.",
        'date_all' => 'todo o período'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Enviar ficheiro CSV',
        'import_file' => 'Importar ficheiro',
        'first_row_contains_titles' => 'Primeira linha contém títulos das colunas',
        'first_row_contains_titles_desc' => 'Deixe marcado se primeira linha do CSV é utilizada como títulos das colunas.',
        'match_columns' => '2. Associar as colunas do ficheiro a campos do base de dados',
        'file_columns' => 'Colunas do ficheiro',
        'database_fields' => 'Campos do base de dados',
        'set_import_options' => '3. Definir opções de importação',
        'export_output_format' => '1. Formato de saída da exportação',
        'file_format' => 'Formato do ficheiro',
        'standard_format' => 'Formato padrão',
        'custom_format' => 'Formato personalizado',
        'delimiter_char' => 'Caracter delimitador',
        'enclosure_char' => 'Caracter qualificador',
        'escape_char' => 'Caracter de escape',
        'select_columns' => '2. Selecione colunas para exportar',
        'column' => 'Coluna',
        'columns' => 'Colunas',
        'set_export_options' => '3. Definir opções de exportação',
        'show_ignored_columns' => 'Mostrar colunas ignoradas',
        'auto_match_columns' => 'Auto associar colunas',
        'created' => 'Criados',
        'updated' => 'Atualizados',
        'skipped' => 'Ignorados',
        'warnings' => 'Alertas',
        'errors' => 'Erros',
        'skipped_rows' => 'Registos ignorados',
        'import_progress' => 'Progresso da importação',
        'processing' => 'Processando',
        'import_error' => 'Erro de importação',
        'upload_valid_csv' => 'Por favor envie um ficheiro CSV válido.',
        'drop_column_here' => 'Soltar coluna aqui...',
        'ignore_this_column' => 'Ignorar esta coluna',
        'processing_successful_line1' => 'Processo de exportação de ficheiro concluído com sucesso!',
        'processing_successful_line2' => 'O navegador agora deve redirecionar automaticamente para o descarregar do ficheiro.',
        'export_progress' => 'Progresso da exportação',
        'export_error' => 'Erro de exportação',
        'column_preview' => 'Prévisualizar coluna',
        'file_not_found_error' => 'Ficheiro não encontrado',
        'empty_error' => 'Não havia dados para exportar',
        'empty_import_columns_error' => 'Por favor, especifique algumas colunas para importar.',
        'match_some_column_error' => 'Por favor, combine algumas colunas primeiro.',
        'required_match_column_error' => 'Por favor, especifique a combinação para o campo requerido :label.',
        'empty_export_columns_error' => 'Por favor, especifique algumas colunas para exportar.',
        'behavior_missing_uselist_error' => 'Deve implementar o comportamento do controlador ListController com a opção de exportação "useList" activada.',
        'missing_model_class_error' => 'Por favor, especifique a propriedade modelo de classe para :type',
        'missing_column_id_error' => 'Identificador de coluna ausente',
        'unknown_column_error' => 'Coluna desconhecida',
        'encoding_not_supported_error' => 'Codificação do arquivo fonte desconhecida. Por favor, selecione a opção "Formato personalizado", com a devida codificação, para importar o arquivo.',
        'encoding_format' => 'Codificação do arquivo',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ]
];
