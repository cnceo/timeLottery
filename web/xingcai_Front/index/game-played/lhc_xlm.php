<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<style type="text/css">
.lhcBox2 dl .sGameStatusItem{
	width: 100px;
}
.lhcBox2 dt span{
	width: 156px !important;
}
.lotteryView_lhc .lhcBox dl dd span{
	width: 156px !important;
}
.lotteryView_lhc .lhcBox dl dd span.input {
	width: 154px !important;
}
.lotteryView_lhc .lhcBox dl dd span.input  input{
	width: 130px !important;
}

</style>
<div class="dGameStatus hklhc lotteryView_lhc" action="tzlhcSelect" length="1">
                <div class="Contentbox" id="Contentbox_0">
        <div class="lhcBox" >
		
		<div class="dGameStatus hklhc lotteryView_lhc2" action="tzlhcSelect" length="1">
                <div class="Contentbox" id="Contentbox_0">
        <div class="lhcBox2" >
		<dl style="width: 468px;">
			<dt>
		<span>号码</span><span>赔率</span><span >金额</span>
			</dt>
		<dd>
		<span id="RteSPBtdtd" class="sGameStatusItem">特大</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBtdtd',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBtdtd" name="SPBSOE" acno="特大" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBtxtx" class="sGameStatusItem">特小</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBtxtx',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBtxtx" name="SPBSOE" acno="特小" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBtwd" class="sGameStatusItem">特尾大</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBtwd',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBtwd" name="SPBSOE" acno="特尾大" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBtwx" class="sGameStatusItem">特尾小</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBtwx',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBtwx" name="SPBSOE" acno="特尾小" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBtd" class="sGameStatusItem">特单</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBtd',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBtd" name="SPBSOE" acno="特单" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBts" class="sGameStatusItem">特双</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBts',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBts" name="SPBSOE" acno="特双" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBthd" class="sGameStatusItem">特合大</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBthd',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBthd" name="SPBSOE" acno="特合大" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBthx" class="sGameStatusItem">特合小</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBthx',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBthx" name="SPBSOE" acno="特合小" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBthds" class="sGameStatusItem">特合单</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBthds',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBthds" name="SPBSOE" acno="特合单" type="text"></span>
		</dd>
		<dd>
		<span id="RteSPBthss" class="sGameStatusItem">特合双</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBthss',$this->played)?></span>
		<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBthss" name="SPBSOE" acno="特合双" type="text"></span>
		</dd>
		
		</dl>
		<dl style="width: 468px;">
		<dt>
		<span>号码</span><span >赔率</span><span >金额</span>
			</dt>
			<dd>
			<span id="RteSPBttx" class="sGameStatusItem">特天肖</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBttx',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBttx" name="SPBSOE" acno="特天肖" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPBtdx" class="sGameStatusItem">特地肖</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPBtdx',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPBtdx" name="SPBSOE" acno="特地肖" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPtqx" class="sGameStatusItem">特前肖</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPtqx',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPtqx" name="SPH2" acno="特前肖" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPthx" class="sGameStatusItem">特后肖</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPthx',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPthx" name="SPH2" acno="特后肖" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPtjx" class="sGameStatusItem">特家肖</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPtjx',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPtjx" name="SPH2" acno="特家肖" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPtyx" class="sGameStatusItem">特野肖</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPtyx',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPtyx" name="SPH2" acno="特野肖" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPzd" class="sGameStatusItem">总大</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPzd',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPzd" name="SPH2" acno="总大" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPzx" class="sGameStatusItem">总小</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPzx',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPzx" name="SPH2" acno="总小" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPzds" class="sGameStatusItem">总单</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPzds',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPzds" name="SPH2" acno="总单" type="text"></span>
			</dd>
			<dd>
			<span id="RteSPzss" class="sGameStatusItem">总双</span><span class="num" style="margin-left:12px;"><?=$this->getLHCRte('RteSPzss',$this->played)?></span>
			<span class="input" style="margin-left:-3px;"><input maxlength="5" id="RteSPzss" name="SPH2" acno="总双" type="text"></span>
			</dd>
		</dl>

		</div>
                 
         </div>
              </div>    </div>    </div>
            </div>
		
				<div class="addOrderBox" >
                <div class="addOrderLeft addOrderLeft625">
                                   
                   <input type="button" class="addBtn" onclick="bringRte();" value="添加投注">
                    <div class="chooseMsg">
                        <p>总金额共 <span id="sTotalCredit">0</span> 元</p>
                    </div>
                </div>
           
            </div>