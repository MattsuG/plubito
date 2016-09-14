@extends('common.layout_no_sidebar')
@section('TitleAndCss')
<title>TopPage</title>
    <link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
@stop

@section('content')
<div class="terms_title">
    <h3>利用規約</h3>
</div>
<div class="terms_body">
    <p><br>
    <h3>プラビト利用規約</h3><br><br>
    <h3>第1章 総則</h3><br><br>
    第1条（本規約の目的及び適用）<br>
    1. プラビト利用規約（以下「本規約」といいます。）は、株式会社タイムラグ（以下「当社」といいます。）が運営するサービス「＋ヒト（プラビト）」（以下「本サービス」といいます。）及び当社が運営するウェブサイト（以下「本ウェブサイト」といいます。）の利用者に適用されます。本サービスの利用者は、本規約の内容を十分理解した上でその内容を遵守することに同意して本サービスを利用するものとし、本サービスを利用した場合には、当該利用者は本規約を遵守することに同意したものとみなします。<br>
    2. 当社が本ウェブサイト上で随時掲載する本サービスの利用等に関するルール、諸注意、利用ガイド、お知らせ等は本規約の一部を構成するものとします。<br><br>
    第2条（利用規約の変更）<br>
    1. 当社は、当社の裁量で本規約を随時変更できるものとします。規約を変更した場合には、当社は本ウェブサイトに掲載するものとします。また、変更した本規約は、変更後の本規約が本ウェブサイトに掲載された時点より生ずるものとします。
    2. 本ウェブサイトに、変更後の本規約を掲載した後に本サービスを利用した利用者は、当該変更に同意したものとします。<br><br>
    第3条（用語の定義）<br>
    1.「本サービス」とは、当社が提供するマッチングサービス及び関連サービスをいいます。<br>
    2.「本ウェブサイト」とは、当社が「＋ヒト（プラビト）」の名称で運営するドメインが「plubito.com」であるウェブサイト及びその他の関連ウェブサイト、メールマガジン等本ウェブサイトから発信する情報を含むものをいいます（理由の如何を問わず当社のウェブサイトのドメイン又は内容が変更された場合は、当該変更後のウェブサイトを含みます。）。<br>
    3.「利用者」とは、 会員または非会員を問わず、本サービスの提供を受ける個人で、本サイトの閲覧者も含みます。<br>
    4.「会員」とは、利用者のうち、本サイトで所定の会員登録手続きを行なった個人をいいます。<br>
    5. 「進路情報の提供」とは、進路に関する情報またはアドバイスを提供する会員（以下「話し手」といいます。）が進路に関する情報またはアドバイスを求める会員（以下「聞き手」といいます。）に対して、聞き手が求める進路に関する情報またはアドバイスを、面会または映像通話などのオンラインで直接提供することをいいます。<br>
    6. 「マッチングサービス」とは、話し手と聞き手に向けて、進路情報の提供に関する取引の機会と取引に関する各種の情報を提供するツール及びプラットフォームの提供及びこれに付随又は関連するサービスをいいます。<br>
    7. 「登録実施日時」とは、聞き手の予約リクエストを話し手が承諾することにより決定した、面会またはオンラインで進路情報の提供を受けるシステム上に登録された日時をいいます。話し手または聞き手の都合により、進路情報の提供を受ける実際の日時が変更される場合はありますが、かかる状況においても登録実施日時は変更後の日時ではなく話し手承諾時にシステム上に登録された日時をいいます。<br><br><br><br>
    <h3>第2章 会員登録に関する規約</h3><br><br>
    第4条（会員登録）<br>
    1. 会員登録は、会員となる本人のみが申請できるものとします。<br>
    2. 会員登録手続きを行なう者は、登録情報の入力にあたり、入力した情報は全て真実であることを保証するものとします。<br>
    3. 当社は、以下の各号のいずれかの事由に該当する場合、事由を通知することなく会員登録を拒否できるものとします。<br>
    (1) 過去本規約に違反した、もしくは当サービスの会員資格取消等の処分を受けたことがある場合<br>
    (2) 本規約に違反するおそれがある場合<br>
    (3) 登録情報に虚偽の情報があることが判明した場合<br>
    (4) 反社会勢力等と何らかの関係・関与を行っていると当社が判断した場合<br>
    (5) 未成年者、成年被後見人、被保佐人又は被補助人のいずれかであり、法定代理人、後見人､保佐人又は補助人の同意等を得ていなかった場合<br>
    (6) その他、当社が適当でないと判断した場合<br><br>
    第5条（登録情報の変更）<br>
    会員は、登録情報に変更があった場合、遅滞なく、真正、最新の情報に登録内容を変更するものとします。<br><br><br><br>
    <h3>第３章 話し手登録及び提供する進路情報の登録に関する規約</h3><br><br>
    第6条（話し手登録）<br>
    1. 話し手登録は、話し手となる本人のみが申請できるものとします。<br>
    2. 話し手は、当社が定める承認手続きを経て当社が定める基準に準じた場合に限り話し手として承認されるものとします。承認を以って話し手登録が完了したものと見なされます。<br>
    3. 当社は、以下の各号のいずれかの事由に該当する場合、事由を通知することなく話し手登録を拒否できるものとします。<br>
    (1) 過去本規約に違反した、もしくは当サービスの話し手資格取消等の処分を受けたことがある場合<br>
    (2) 本規約に違反するおそれがある場合<br>
    (3) 登録情報に虚偽の情報があることが判明した場合<br>
    (4) 反社会勢力等と何らかの関係・関与を行っていると当社が判断した場合<br>
    (5)未成年者、成年被後見人、被保佐人又は被補助人のいずれかであり、法定代理人、後見人､保佐人又は補助人の同意等を得ていなかった場合<br>
    (6) その他、当社が適当でないと判断した場合<br><br>
    第7条（話し手登録情報の変更）<br>
    話し手は、登録情報に変更があった場合、遅滞なく、真正、最新の情報に登録内容を変更するものとします。<br><br>
    第8条（提供する進路情報の登録）<br>
    1. 話し手は、当社の定めるところに従い、提供する進路情報の内容を登録することができるものとし、登録した情報は全て真実であることを保証するものとします。<br>
    2. 当社は、第1項に基づき登録された内容が、以下の各号のいずれかの事由に該当する場合は、登録を削除することがあります。<br>
    (1) 本規約に違反するおそれがあると当社が判断した場合<br>
    (2) 当社に提供された情報の全部又は一部につき虚偽、誤記又は記載漏れがあった場合<br>
    (3) その他、当社が登録を適当でないと判断した場合<br><br>
    第９条（パスワード及び会員IDの管理）<br>
    1. 会員は、自己の責任において、パスワード及び会員IDを管理及び保管するものとし、これを第三者に利用させたり、貸与、譲渡、名義変更、売買等をしてはならないものとします。<br>
    2. パスワード又は会員IDの管理不十分、使用上の過誤、第三者の使用等による損害の責任は会員が負うものとし、当社は一切の責任を負いません。<br>
    3. 会員は、パスワード又は会員IDが盗まれたり、第三者に使用されていることが判明した場合には、直ちにその旨を当社に通知するとともに、当社からの指示に従うものとします。<br><br><br><br>
    <h3>第4章 本サービスの利用に関する規約</h3><br><br>
    第10条（本サービスの利用）<br>
    本サービスは、必ず会員本人が利用するものとします。<br><br>
    第11条（本サービスの内容）<br>
    1. 当社は本サービスによる情報提供を通じて、進路情報の提供に関する取引を行なうためのツール及びプラットフォーム及びこれに付随または関連するサービスを提供します。<br>
    2. 本サービスは、進路情報の提供に関する取引を行なうことを目的とし、当社は本取引の当事者とはなりません。但し、本取引に基づく聞き手から話し手に対する謝礼の支払事務は、第13条に定めるところにより、当社が聞き手から委託を受けて代行します。<br>
    3. 本サービスは、聞き手と話し手の双方が自らの責任・判断で必要な情報を確認し、同意し、聞き手が決済を行なった時点で、進路情報の提供を受ける契約が成立するものとします。<br>
    4. 会員はマッチングに必要な情報を本サイトに投稿できるものとします。当社は、会員の投稿内容が以下のいずれかに該当すると判断した場合、会員に何ら通知することなく投稿を削除し、また当該会員に対して利用停止を含む必要な措置を採る事ができるものとします。<br>
    (1) 法令その他公序良俗に反する場合<br>
    (2) 本規約に違反し、又は違反する恐れがある場合<br>
    (3) 当サービスの運営方針に合致しないと当社が判断する場合<br>
    (4) その他当社が不適切と判断した場合<br><br>
    第12条（キャンセルの取扱い）<br>
    1. 話し手は、情報またはアドバイス提供の実施前にキャンセルを希望する場合、当社所定の方法で聞き手及び当社に対して進路情報の提供の中止を通知します。その場合の謝礼は全額が聞き手に返金されるものとします。聞き手がキャンセルを希望する場合は原則として返金されないものとします。<br>
    2. 話し手または聞き手の合意がある場合に限り、進路情報の提供の日時の変更が可能なものとし、日時変更の場合はキャンセルに該当しないものとします。ただし、進路情報の提供を行う実際の日時が変更された場合においても、第3条第7項で定義された登録実施日時は変更されないものとします。<br><br><br><br>
    <h3>第5章 決済</h3><br><br>
    第13条（決済方法）<br>
    当社は話し手への謝礼支払事務を聞き手の預託を受けて代行します。聞き手は、当社が別途指定する場合を除き、PayPal社の決済サービスを利用して当社に対し話し手への謝礼を支払うものとします。<br><br>
    第14条（聞き手による謝礼の決済）<br>
    1. 聞き手は、進路情報の提供の実施前に、謝礼を当社宛に支払うものとします。<br>
    2. 聞き手側からのキャンセルの場合は、天災等不可抗力による場合等当社が相当と判断する場合除いて、返金を認めないものとします。話し手側からのキャンセルの場合、全額を聞き手側に返金するものとします。<br>
    3. 聞き手は、登録実施日時から1週間以内に限り、進路情報の提供についての異議を当社に対して述べることができるものとします（以下当該期間を「異議申出期間」といいます。）。聞き手がかかる異議を述べた場合において、話し手が進路情報の提供を怠っていた等、当社が聞き手の異議に理由があると認める場合には、当社が別途定めるところに従い、聞き手が支払った謝礼を聞き手に返還します。この場合、聞き手は、返還される金額から返還に際して当社が負担した費用が控除される場合があることに、予め同意するものとします。異議申出期間中に聞き手から異議が述べられなかった場合には、話し手が適切な進路情報の提供を行ったものとみなし、以後聞き手は異議を述べることはできないものとします。<br><br>
    第15条（謝礼の支払および利用手数料）<br>
    1. 話し手は、謝礼の受領業務を当社に委託するものとします。当社は、当社が話し手に代わり受領した謝礼から、本サービスの利用手数料（聞き手が支払う謝礼の30％とします。）を差し引くことにより、話し手から利用手数料を受領するものとします。<br>
    2. 当社は、当社が話し手に代わり受領した謝礼から利用手数料を差し引いた金額を、当社が指定する方法により支払うものとします。支払の時期は、登録実施日時の翌月末（当日が金融機関営業日でない場合は翌営業日）とします。なお、かかる支払について、利息は一切発生しないものとします。<br>
    3. 当社から話し手への支払にかかる決済手数料は、話し手が負担するものとします。<br>
    4. 天災等不可抗力による事情があったと当社が判断し、聞き手のペナルティ無しでのキャンセルを認める場合、話し手はキャンセル料なしでのキャンセルを受け入れる義務があるものとします。その場合、話し手の当社に対する利用手数料もキャンセルされるものとします。<br>
    5. 当社は、 当社が通知したにもかかわらず、登録実施日時より一年以内に、話し手が第2項の規定により定めた方法で支払を受ける登録等を行わない場合、話し手が第2項の規定による謝礼の支払を受領する権利を放棄したものとみなすことができます。<br><br><br><br>
    <h3>第6章 サービスに共通する規約</h3><br><br>
    第16条（個人情報の取得）<br>
    本サービスでは、個人情報について、当社が別途定める個人情報保護方針の定めに従い、取り扱うものとします。<br><br>
    第17条（会員の守秘義務）<br>
    1. 会員は、本サービスを利用するに当たり、当該会員が所属する企業その他の第三者に対して負うべき守秘義務（内部規則等に基づく義務を含みます。）を遵守すること、これに違反して当社又は他の会員に対して情報を開示又は漏洩しないことを表明及び保証します。<br>
    2. 会員は、本サービスで成立した進路情報の提供において話し手及び聞き手より入手した情報を秘密として保持し、相互の同意がない限り、これを第三者に開示又は漏洩しないものとします。<br><br>
    第18条（禁止事項）<br>
    1. 本サービスの会員および利用者は、以下の行為を行ってはならないものとします。<br>
    (1) 会員もしくは第三者の権利を侵害する行為<br>
    ア. 個人、法人を含む第三者の権利（財産権、知的財産権、著作権、プライバシー権、氏名権、肖像権、名誉等）を侵害する行為<br>
    イ. 企業機密等を漏洩するなど、守秘義務に違反する行為<br>
    ウ. 所属企業、団体等の内部規則等に違反する行為<br>
    (2) 適切なサービス実施を妨げる行為<br>
    ア. 虚偽の情報を登録・投稿・表示する行為<br>
    イ. 複数アカウントの登録、または自己のアカウントを他人に利用させるなど、アカウントを不正に利用する行為<br>
    ウ. 当社の承認を得る事無く、本サービスで成立した進路情報の提供に参加する権利を他人に譲渡する行為<br>
    エ. 本サービスを介して知り合ったにも関わらず利用手数料等を支払わずに進路情報の提供を実施する行為<br>
    オ. 本サービスで話し手の経歴・経験等を知ったにも関わらず、サイト外で連絡を取り合い、当社を排除した進路情報の提供に関する取引を行い、当社の提供する決済システム利用を回避するなどして当社への手数料支払を回避する行為<br>
    (3) 当社の業務に支障を与える行為<br>
    ア. ウイルスの送付、不正アクセス等により、当社システムおよび本サービス提供に障害等を引き起こす行為<br>
    イ. その他本サービス、当社の業務を妨害、または当社の信頼を毀損する行為<br>
    (4) 本来の目的とは異なる利用<br>
    ア. 政治的または宗教的思想を含む情報を提供、または勧誘する行為（当社が事前に許可した場合を除く）<br>
    イ. ネットワークビジネス、マルチ商法、ねずみ講などへの勧誘、商品販売もしくは、結婚紹介、出会い系サービスなどへの勧誘<br>
    ウ. インターネット異性紹介事業を利用して児童を誘引する行為の規制等に関する法律に基づく、当該事業の提供者に対する規制及び当該事業を利用した不正勧誘行為の禁止に違反する行為。<br>
    エ. 当サイトを利用したアフィリエイト誘導、目的に合致しないリンクの貼付け行為<br>
    (5) 本サービスの一部又は全部の複製・改変・編集・消去・他のプログラム等との結合・リバースエンジニアリング・逆アセンブル・逆コンパイル等又はミラーサイト構築等の行為<br>
    (6) スクレイピング、クローリング（クローラ、ロボット及びスパイダー等のプログラム）及びその他の類似の手段によって本サービスにアクセスし、又は登録された名刺等の情報を含む本サービスに関する情報を取得する行為<br>
    (7) 人種、民族、信条、性別、社会的身分、居住場所、身体的特徴、病歴、教育、財産および収入等を根拠にする差別的表現行為<br>
    (8) 倫理的に問題がある低俗、有害、下品な行為、他人に嫌悪感を与える内容の情報を開示する行為<br>
    (9) ポルノ、売春、風俗営業、これらに関連する内容の情報を開示する行為<br>
    (10) 迷惑行為、嫌がらせ行為、誹謗中傷行為、その他当社、又は他の登録メンバー、外部SNS事業者その他の第三者に精神的被害・経済的被害を与える可能性のある行為<br>
    (11) 法令、公序良俗に反する行為、そのおそれがある行為<br>
    (12) その他当社が不適切であると判断する行為<br>
    2. 上記禁止行為に該当すると当社が判断した場合、当社は、事前に通知することなく利用停止、会員登録の抹消等次条に規定する処分を含む必要な対応を講じることができるものとします。また、当社に損害が発生した場合、会員は、損害賠償義務を負うものとします。<br><br>
    第19条（利用停止、会員登録の抹消及び剥奪）<br>
    1. 当社は、会員が以下の各号いずれかの事由に該当すると判断した場合、当該会員に対して、何ら通知等することなく、本サービスの利用を一時的に停止すること、会員登録を抹消すること、もしくは会員資格を剥奪し以降の一切の利用を禁止することができるものとします。<br>
    (1) 本規約に違反した場合<br>
    (2) 以前登録を抹消された者、もしくは利用を拒否した者が登録していた場合<br>
    (3) 当社からの改善等の要請に対応しない場合<br>
    (4) 6ヶ月以上本サービスの利用がなく、当社からの連絡に対して応答がない場合<br>
    (5) その他当社が当サービスの会員としてふさわしくないと判断した場合<br>
    2. 前項各号のいずれかの事由に該当した場合、会員は当社に対して負っている債務の一切について当然に期限の利益を失い、直ちに当社に対して全ての債務の支払を行わなければなりません。<br>
    3. 当社及び会員は、それぞれ7日前までに当社所定の方法で相手方に通知することにより、会員の登録を取り消すことができます。<br>
    4. 当社は、本条に基づき当社が行った行為により会員に生じた損害について一切の責任を負いません。<br><br>
    第20条（サービスの中断、停止または終了）<br>
    1. 当社は、以下の各号いずれかの事象が発生した場合、会員および利用者に事前に通知することなく、本サービスの中断もしくは停止、終了を行うことができるものとします。<br>
    (1) 本サービスに関するシステム保守<br>
    (2) 停電、火災及び天災等の不可抗力により本サービスが提供できなくなった場合<br>
    (3) その他当社が必要と判断した場合<br>
    2. 当社は、会員および利用者に事前に通知することなく、本サービスの提供内容変更または終了を行うことができるものとします。<br>
    3. 当社は、本条に基づき当社が行った措置に基づき会員に生じた損害について一切の責任を負いません。<br><br>
    第21条（当社の不保証）<br>
    1. 本サービスにて、会員が登録、投稿する情報は、会員の責任及び判断に基づくものであり、正確性、適法性、及び妥当性について、当社は何ら保証をするものではありません。本サービスの利用は、全て会員自らの責任において行うものとします。<br>
    2. 当社は、本サービスにおける個々の内容及び品質、アドバイス能力、情報を有することについて、会員に対して何ら保証をするものではありません。<br>
    3. 当社は、本サービスに付随して開催するセミナーやブログその他のメディアを通じて紹介する話し手の経歴について合理的な範囲で確認するものといたしますが、会員に対して何ら保証をするものではありません。<br>
    4. 当社は、本サービスの運用に適切に取り組みますが、本サービスおよび本ウェブサイトにコンピューターウイルス等有害なものが含まれていないことを保証するものではありません。<br><br>
    第22条（免責事項）<br>
    1. 当社は、以下の各号の事項に伴い発生した不利益、損害等について、理由の如何を問わず、一切の責任を負わないものとします。<br>
    (1) 本サービスを通じた会員の投稿、会員間のやりとりを含め、会員間、会員もしくは利用者と第三者の間でトラブルが発生した場合<br>
    (2) 本サービスを通じて入手した情報またはアドバイスが会員の期待を満たさなかった場合<br>
    (3) 本サービスからリンクされた当社以外のウェブサイト利用に伴うトラブルが発生した場合<br>
    (4) 本サービスの登録・投稿等のデータが消失した場合<br>
    (5) 本ウェブサイト、当社システムへの不正アクセス、コンピューターウイルスの混入等が発生した場合<br>
    (6) 当社から送付されるメール、本ウェブサイトにコンピューターウイルス等有害なものが含まれていた場合<br>
    (7) 本サービスが中断、停止、終了した場合<br>
    (8) 規約に基づく利用停止等の対応により、当該会員が損害を被った場合<br>
    2. 消費者契約法の適用その他の理由により、本項その他当社の損害賠償責任を免責する規定にかかわらず当社が会員に対して損害賠償責任を負う場合においても、当社の賠償責任は、下記の金額を上限とします。<br>
    (1) 会員が聞き手としての立場で損害を被った場合： <br>損害の事由が生じた時点から遡って過去6ヶ月の期間に当社が聞き手から現実に受領した代金の総額<br>
    (2) 会員が話し手としての立場で損害を被った場合： <br>損害の事由が生じた時点から遡って過去6ヶ月の期間に話し手が当社から現実に受領した謝礼の総額<br><br>
    第23条（権利帰属）<br>
    1. 本ウェブサイト及び本サービスに関するすべてのコンテンツの知的財産権、著作権は、全て当社又はコンテンツ提供者など、適法な権利者に帰属するものとします。<br>
    2. 会員は、当社に対し、本サービスに投稿するすべての情報にかかる著作権につき、目的を問わず、世界的、非独占的、無償、サブライセンス可能かつ譲渡可能な使用、複製、配付、派生著作物の作成、表示、出版、翻案、送信可能化等に関する一切の利用を許諾するものとします。<br>
    3. 当サービスの全ての情報について、当社以外が、当社に無断でこれを利用、転用することはできません。<br><br>
    第24条（表示）<br>
    会員は、広告、名刺、郵便物等その他一切の媒体にて、当社・本サービスの名称、当ウェブサイトとの関係について表示する場合、当社が事前に定めた方法及び表示内容による場合を除き、事前に当社の承諾を求めるものとします。<br><br>
    第25条（本サービスの譲渡）<br>
    当社は、本サービスの事業を第三者に譲渡した場合、本サービスの運営者たる地位、本規約上の地位、本規約に基づく権利、義務及び登録情報及びその他情報を、当該事業の譲渡人に譲渡することができるものとし、会員は、本規約への同意を以って当該譲渡について予め同意するものといたします。なお、本条に定める事業譲渡には、通常の事業譲渡のみならず、会社分割その他事業が移転するあらゆる場合を含みます。<br><br>
    第26条（分離可能性）<br>
    本規約のいずれかの条項又はその一部が、消費者契約法その他の法令等により無効又は執行不能と判断された場合であっても、本規約の残りの規定及び一部が無効又は執行不能と判断された規定の残りの部分は、継続して完全に効力を有し、当社及び会員は、当該無効若しくは執行不能の条項又は部分を適法とし、執行力を持たせるために必要な範囲で修正し、当該無効若しくは執行不能な条項又は部分の趣旨並びに法律的及び経済的に同等の効果を確保できるように努めるものとします。<br><br>
    第27条（存続規定）<br>
    第9条第２項、未払いがある場合に限り第13条から第15条、第17条、第18条第2項、第19条第2項及び第4項、第20条第3項、第21条から第23条並びに第25条から第28条までの規定は利用契約の終了後も有効に存続するものとします。<br><br>
    第28条 （準拠法・管轄合意）<br>
    1. 本規約は、日本国の法律に基づいて解釈されるものとします。<br>
    2. 本サービスや規約に関連して生じた一切の紛争については、東京地方裁判所を第一審の専属的合意管轄裁判所とします。<br><br>
    </p>
</div>
@stop
@section('Js')
@stop
