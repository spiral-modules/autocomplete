<extends:spiral:element/>

<block:resources>
    <resource:script href="resources/scripts/spiral/sf.js"/>
    <resource:script href="resources/scripts/spiral/sf.autocomplete.min.js"/>
</block:resources>

<block:body>
    <?php #compiled
    //Receiving label content as evaluator variable
    $this->evaluatorVariable('label', '${label}');
    if (!empty($label) && $label != "''") {
        ?>
        <block:input-label>
            <span class="${label-class} item-label" node:attributes="prefix:label">${label}</span>
        </block:input-label>
        <?php #compiled
    }
    ?>
    <block:input-body>
        <label class="item-form">
            <input type="text" data-name="${name}" data-url="${url}" class="js-sf-autocomplete ${class}" node:attributes/>
        </label>
    </block:input-body>
</block:body>