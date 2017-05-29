<?php

	/**
	* 
	*/
	class Literals
	{

		const STREAM_KEY_DELIMITER = "~";

		const USER_CREDENTIALS_FIELD_NAMES = array(
				"USER_NAME" => "user_name",
				"PASSWORD_HASH" => "pass_hash"
			);

		const USER_DETAILS_FIELD_NAMES = array(
				"USER_NAME" => "user_name",
				"NAME" => "name"
			);

		const USER_SESSION_FIELD_NAMES = array(
				"USER_NAME" => "user_name",
				"SESSION_ID" => "sess_id",
				"SESSION_IP" => "sess_ip"
			);

		const USER_ADDRESS_FIELD_NAMES = array(
				"USER_NAME" => "user_name",
				"ADDRESS" => "addr"
			);

		const CONTRACT_DETAILS_FIELD_NAMES = array(
				"CONTRACT_ID" => "contract_id",
				"TITLE" => "title",
				"DESCRIPTION" => "desc",
				"DATE_OF_UPLOAD" => "dou",
				"FILE_HASH" => "hash"
			);

		const CONTRACT_DETAILS_FIELD_DESC = array(
				"contract_id" => "Contract ID",
				"title" => "Title",
				"desc" => "Description",
				"dou" => "Date Of Creation",
				"hash" => "File Hash"
			);

		const CONTRACT_INVITED_SIGNEES_FIELD_NAMES = array(
				"INVITEE_ID" => "invitee_id",
				"INVITEE_ADDRESS" => "invitee_addr",
				"CONTRACT_ID" => "contract_id"
			);

		const CONTRACT_INVITED_SIGNEES_FIELD_DESC = array(
				"invitee_id" => "Invitee ID",
				"invitee_addr" => "Invitee's address",
				"contract_id" => "Contract ID"
			);

		const CONTRACT_SIGNATURES_FIELD_NAMES = array(
				"CONTRACT_ID" => "contract_id",
				"SIGNER_ID" => "signer_id",
				"SIGNER_ADDRESS" => "signer_addr",
				"SIGNATURE" => "sign",
				"TIMESTAMP" => "timestamp"
			);

		const CONTRACT_SIGNATURES_FIELD_DESC = array(
				"contract_id" => "Contract ID",
				"signer_id" => "Signer ID",
				"signer_addr" => "Signer's address",
				"sign" => "Signature",
				"timestamp" => "Timestamp"
			);

		const CONTRACTS_SIGNED_FIELD_NAMES = array(
				"CONTRACT_ID" => "contract_id"
			);

		const CONTRACTS_SIGNED_FIELD_DESC = array(
				"contract_id" => "Contract ID"
			);

		const VAULT_FIELDS_CODES = array(
			"date_of_upload" => "dou",
			"description" => "desc",
			"file_hex" => "file_hex"
			);

		const VAULT_FIELDS_DESC = array(
			"dou" => "Date of Upload",
			"desc" => "Description",
			"file_hex" => "File data Hexadecimal"
			);

		const MULTICHAIN_COMMANDS = array(
			'getbestblockhash',
			'getblock',
			'getblockchaininfo',
			'getblockcount',
			'getblockhash',
			'getchaintips',
			'getdifficulty',
			'getmempoolinfo',
			'getrawmempool',
			'gettxout',
			'gettxoutsetinfo',
			'listassets',
			'listpermissions',
			'liststreams',
			'verifychain',
			'getblockchainparams',
			'getinfo',
			'getruntimeparams',
			'help',
			'getgenerate',
			'gethashespersec',
			'getblocktemplate',
			'getmininginfo',
			'getnetworkhashps',
			'prioritisetransaction',
			'submitblock',
			'appendrawchange',
			'appendrawdata',
			'createrawtransaction',
			'decoderawtransaction',
			'decodescript',
			'getrawtransaction',
			'sendrawtransaction',
			'signrawtransaction',
			'createkeypairs',
			'createmultisig',
			'estimatefee',
			'estimatepriority',
			'validateaddress',
			'verifymessage',
			'addmultisigaddress',
			'appendrawexchange',
			'combineunspent',
			'completerawexchange',
			'create',
			'createfrom',
			'createrawexchange',
			'createrawsendfrom',
			'decoderawexchange',
			'getaccount',
			'getaccountaddress',
			'getaddressbalances',
			'getaddresses',
			'getaddressesbyaccount',
			'getaddresstransaction',
			'getassetbalances',
			'getassettransaction',
			'getbalance',
			'getmultibalances',
			'getnewaddress',
			'getrawchangeaddress',
			'getreceivedbyaccount',
			'getreceivedbyaddress',
			'getstreamitem',
			'gettotalbalances',
			'gettransaction',
			'gettxoutdata',
			'getunconfirmedbalance',
			'getwalletinfo',
			'getwallettransaction',
			'importaddress',
			'issue',
			'issuefrom',
			'issuemore',
			'issuemorefrom',
			'listaccounts',
			'listaddresses',
			'listaddressgroupings',
			'listaddresstransactions',
			'listassettransactions',
			'listlockunspent',
			'listreceivedbyaccount',
			'listreceivedbyaddress',
			'listsinceblock',
			'liststreamitems',
			'liststreamkeyitems',
			'liststreamkeys',
			'liststreampublisheritems',
			'liststreampublishers',
			'listtransactions',
			'listunspent',
			'listwallettransactions',
			'lockunspent',
			'move',
			'preparelockunspent',
			'preparelockunspentfrom',
			'publish',
			'publishfrom',
			'send',
			'sendasset',
			'sendassetfrom',
			'sendfrom',
			'sendfromaccount',
			'sendmany',
			'sendwithdata',
			'sendwithdatafrom',
			'setaccount',
			'signmessage',
			'subscribe'
			);
	}

?>