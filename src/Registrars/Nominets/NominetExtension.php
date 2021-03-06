<?php

namespace LaravelEPP\Registrars\Nominets;

/**
 * Class storaging Nominet extensions
 * Ref: http://registrars.nominet.uk/registration-and-domain-management/schemas-and-namespace-uris
 */
class NominetExtension
{
    /**
     * Nominet extensions to e.g. allow manipulation of billing fields
     */
    const DOMAIN_NOM = 'http://www.nominet.org.uk/epp/xml/domain-nom-ext-1.2';

    /**
     * Nominet extensions to e.g. add organisation types (e.g. Ltd.)
     */
    const CONTACT_NOM = 'http://www.nominet.org.uk/epp/xml/contact-nom-ext-1.0';

    /**
     * Nominet schema used for notifications
     */
    const STD_NOTIFICATIONS = 'http://www.nominet.org.uk/epp/xml/std-notifications-1.2';

    /**
     * Nominet schema used to append warnings
     */
    const STD_WARNING = 'http://www.nominet.org.uk/epp/xml/std-warning-1.1';

    /**
     * Nominet schema used for changing id field for a contact
     */
    const STD_CONTACT_ID = 'http://www.nominet.org.uk/epp/xml/std-contact-id-1.0';

    /**
     * Nominet schema for releasing domains from one tag to another (push transfer)
     */
    const STD_RELEASE = 'http://www.nominet.org.uk/epp/xml/std-release-1.0';

    /**
     * Nominet schema for accepting and rejecting registrar change/registrant transfer authorization requests.
     */
    const STD_HANDSHAKE = 'http://www.nominet.org.uk/epp/xml/std-handshake-1.0';

    /**
     * This is our custom schema used for the nominet abuse feed.
     */
    const NOM_ABUSE_FEED = 'http://www.nominet.org.uk/epp/xml/nom-abuse-feed-1.0';

    /**
     * Nominet schema to check second level domain name rights
     */
    const NOM_DIRECT_RIGHTS = 'http://www.nominet.org.uk/epp/xml/nom-direct-rights-1.0';

    /**
     * Nominet schema used to fork contacts
     */
    const STD_FORK = 'http://www.nominet.org.uk/epp/xml/std-fork-1.0';

    /**
     * Nominet schema used to list domains
     */
    const STD_LIST = 'http://www.nominet.org.uk/epp/xml/std-list-1.0';

    /**
     * Nominet schema used to lock and unlock domains and contacts
     */
    const STD_LOCKS = 'http://www.nominet.org.uk/epp/xml/std-locks-1.0';

    /**
     * Nominet schema used to undo domain renewals
     */
    const STD_UNRENEW = 'http://www.nominet.org.uk/epp/xml/std-unrenew-1.0';

    /**
     * Nominet schema used to obtain information about data quality and validate a contact (for Accredited Channel Partners only)
     */
    const NOM_DATA_QUALITY = 'http://www.nominet.org.uk/epp/xml/nom-data-quality-1.1';
}
