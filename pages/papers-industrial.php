<section class="papers-industrial">
    <h1>VLDB 2019: Industrial Track Papers</h1>

    <div class="schedule-wrap">
        <div>
            <div data-day="2">
                <abbr long="Tuesday" short="Tue"></abbr>
                <p><strong>27</strong><em>Aug</em></p>
            </div>
        </div>

        <div>
            <div class="schedule-head" id="Industry_Session_1"><span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Industry Session 1: Deep Learning and Graph DBs</strong></div>
            
            <p class="schedule-item" data-id="694">
                <strong class="schedule-item-title">QTune: A Query-Aware Database Tuning System with Deep Reinforcement Learning</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="liguoliang" data-at="tsinghua.edu.cn">Guoliang&nbsp;Li</a>&nbsp;(Tsinghua University),
                    <a class="author" href="mailto:" data-uz="zhouxuanhe" data-at="bupt.edu.cn">Xuanhe&nbsp;Zhou</a>&nbsp;(Tsinghua University),
                    <a class="author" href="mailto:" data-uz="lishifu" data-at="huawei.com">Shifu&nbsp;Li</a>&nbsp;(Huawei), and
                    <a class="author" href="mailto:" data-uz="gaobo15" data-at="huawei.com">Bo&nbsp;Gao</a>&nbsp;(Huawei)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Database knob tuning is very important to achieve high performance (e.g., high throughput and low latency). However, knob tuning is an NP-hard problem and existing methods have several limitations. First, DBAs cannot tune a lot of database instances on different database environments. Second, existing machine-learning methods either cannot find good configurations or rely on a lot of training examples which are rather hard to obtain. To address these problems, in this paper, we propose a query-aware database tuning system Oursys with a deep reinforcement learning (DRL) model. Oursys first vectorizes the SQL queries by considering rich features of the SQL queries, including query type, tables, query cost. Then Oursys feeds the query vectors into the DRL model to dynamically choose suitable configurations. We propose a DRL model using the the actor critic networks, which predicts the database changes based on the query vector and the actor critic networks to find optimal configurations according to both the current and predicted database states. In this way the model captures the query changes and dynamically tune the database to achieve high performance. Experimental results show that Oursys achieves high performance and outperforms the state-of-the-art tuning methods.
                </span>

            </p>

            <p class="schedule-item" data-id="734">
                <strong class="schedule-item-title">Smile: A System to Support Machine Learning on EEG Data at Scale</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="lcao" data-at="csail.mit.edu">Lei&nbsp;Cao</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="wenbo" data-at="mit.edu">Wenbo&nbsp;Tao</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="stan84" data-at="gatech.edu">Sungtae&nbsp;An</a>&nbsp;(Georgia Institue of Technology),
                    <a class="author" href="mailto:" data-uz="jjing" data-at="partners.org">Jing&nbsp;Jin</a>&nbsp;(Massachusetts General Hospital),
                    <a class="author" href="mailto:" data-uz="yyan2" data-at="csail.mit.edu">Yizhou&nbsp;Yan</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="xiaoyuliu" data-at="csail.mit.edu">Xiaoyu&nbsp;Liu</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="wendong.ge" data-at="mgh.harvard.edu">Wendong&nbsp;Ge</a>&nbsp;(Massachusetts General Hospital),
                    <a class="author" href="mailto:" data-uz="adam.sah" data-at="gmail.com">Adam&nbsp;Sah</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="leilani" data-at="cs.umd.edu">Leilani&nbsp;Battle</a>&nbsp;(University of Maryland),
                    <a class="author" href="mailto:" data-uz="jsun" data-at="cc.gatech.edu">Jimeng&nbsp;Sun</a>&nbsp;(Georgia Institue of Technology),
                    <a class="author" href="mailto:" data-uz="remco" data-at="cs.tufts.edu">Remco&nbsp;Chang</a>&nbsp;(Tufts University),
                    <a class="author" href="mailto:" data-uz="mwestover" data-at="mgh.harvard.edu">Brandon&nbsp;Westover</a>&nbsp;(Massachusetts General Hospital),
                    <a class="author" href="mailto:" data-uz="madden" data-at="csail.mit.edu">Samuel&nbsp;Madden</a>&nbsp;(MIT), and
                    <a class="author" href="mailto:" data-uz="stonebraker" data-at="csail.mit.edu">Michael&nbsp;Stonebraker</a>&nbsp;(MIT)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In order to reduce the possibility of neural injury from seizures, it is critical to automatically detect and classify "interictal-ictal continuum" (IIC) patterns from EEG data. However, the existing IIC classification techniques are shown to be not accurate and robust enough for clinical use because of the lack of high quality labels of EEG segments as training data. Obtaining high-quality labeled data is traditionally a manual process by trained clinicians that can be tedious, time-consuming, and error-prone. In this work, we propose Smile, an industrial scale system that provides an end-to-end solution to the IIC pattern classification problem. The core components of Smile include a visualization-based time series labeling module and a deep-learning based active learning module. The labeling module enables the users to explore and label 350 million EEG segments (30TB) at interactive speed. The multiple coordinated views allow the users to examine the EEG signals from both time domain and frequency domain simultaneously. The active learning module first trains a deep neural network that automatically extracts both the local features with respect to each segment itself and the long term dynamics of the EEG signals to classify IIC patterns. Then leveraging the output of the deep learning model, the EEG segments that can best improve the model are selected and prompted to clinicians to label. This process is iterated until the clinicians and the models show high degree of agreement. Our initial experimental results show that our Smile system allows the clinicians to label the EEG segments at will with a response time below 500 ms. The accuracy of the model is progressively improved as more and more high quality labels are acquired over time.
                </span>

            </p>

            <p class="schedule-item" data-id="664">
                <strong class="schedule-item-title">Guided automated learning for query workload re-optimization</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="guilherme.fetterdamasio" data-at="uoit.ca">Guilherme&nbsp;Damasio</a>&nbsp;(University of Ontario Institute of Technology),
                    <a class="author" href="mailto:" data-uz="vcorvine" data-at="ca.ibm.com">Vincent&nbsp;Corvinelli</a>&nbsp;(IBM),
                    <a class="author" href="mailto:" data-uz="godfrey" data-at="cse.yorku.ca">Parke&nbsp;Godfrey</a>&nbsp;(York University),
                    <a class="author" href="mailto:" data-uz="piotrm" data-at="ca.ibm.com">Piotr&nbsp;Mierzejewski</a>&nbsp;(IBM),
                    <a class="author" href="mailto:" data-uz="alexandar.mihaylov" data-at="uoit.ca">Alexandar&nbsp;Mihaylov</a>&nbsp;(University of Ontario Institute of Technology),
                    <a class="author" href="mailto:" data-uz="jaroslaw.szlichta" data-at="uoit.ca">Jaroslaw&nbsp;Szlichta</a>&nbsp;(University of Ontario Institute of Technology and IBM), and
                    <a class="author" href="mailto:" data-uz="calisto" data-at="ca.ibm.com">Calisto&nbsp;Zuzarte</a>&nbsp;(IBM)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Query optimization is a hallmark of database systems. When an SQL query runs more expensively than is viable or warranted, determination of the performance issues is usually performed manually in consultation with experts through the analysis of query's execution plan (QEP). However, this is an excessively time consuming, human error-prone, and costly process. GALO is a novel system that automates this process. The tool automatically learns recurring problem patterns in query plans over workloads in an offline learning phase, to build a knowledge base of plan-rewrite remedies. It then uses the knowledge base online to re-optimize queries often quite drastically. GALO's knowledge base is built on RDF and SPARQL, W3C graph database standards, which is well suited for manipulating and querying over SQL query plans, which are graphs themselves. GALO acts as a third-tier of re-optimization, after query rewrite and cost-based optimization, as a query plan rewrite. For generality, the context of knowledge base problem patterns, including table and column names, is abstracted with canonical symbol labels. Since the knowledge base is not tied to the context of supplied QEPs, table and column names are matched automatically during the re-optimization phase. Thus, problem patterns learned over a particular query workload can be applied in other query workloads. GALO's knowledge base is also an invaluable tool for database experts to debug query performance issues by tracking to known issues and solutions as well as refining the optimizer with new tuned techniques by the development team. We demonstrate an experimental study of the effectiveness of our techniques over synthetic TPC-DS and real IBM client query workloads.
                </span>

            </p>

            <p class="schedule-item" data-id="689">
                <strong class="schedule-item-title">AliGraph: A Comprehensive Graph Neural Network Platform</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="red.zr" data-at="alibaba-inc.com">Rong&nbsp;Zhu</a>&nbsp;(Alibaba Group),
                    <a class="author" href="mailto:" data-uz="kun.zhao" data-at="alibaba-inc.com">Kun&nbsp;Zhao</a>&nbsp;(Alibaba Group),
                    <a class="author" href="mailto:" data-uz="yang.yhx" data-at="alibaba-inc.com">Hongxia&nbsp;Yang</a>&nbsp;(Alibaba Group),
                    <a class="author" href="mailto:" data-uz="weilin.lw" data-at="alibaba-inc.com">Wei&nbsp;Lin</a>&nbsp;(Alibaba Group),
                    <a class="author" href="mailto:" data-uz="ericzhou.zc" data-at="alibaba-inc.com">Chang&nbsp;Zhou</a>&nbsp;(Alibaba Group),
                    <a class="author" href="mailto:" data-uz="baole.abl" data-at="alibaba-inc.com">Baole&nbsp;Ai</a>&nbsp;(Alibaba Group),
                    <a class="author" href="mailto:" data-uz="jiufeng.ly" data-at="alibaba-inc.com">Yong&nbsp;Li</a>&nbsp;(Alibaba Group), and
                    <a class="author" href="mailto:" data-uz="jingren.zhou" data-at="alibaba-inc.com">Jingren&nbsp;Zhou</a>&nbsp;(Alibaba Group)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    An increasing number of machine learning tasks require dealing with large graph datasets, which capture rich and complex relationship among potentially billions of elements. Graph Neural Network (GNN) becomes an effective way to address the graph learning problem by converting the graph data into a low dimensional space while keeping both the structural and property information to the maximum extent and constructing a neural network for training and referencing. However, it is challenging to provide an efficient graph storage and computation capabilities to facilitate GNN training and enable development of new GNN algorithms. In this paper, we present a comprehensive graph neural network system, namely AliGraph, which consists of distributed graph storage, optimized sampling operators and runtime to efficiently support not only existing popular GNNs but also a series of in-house developed ones for different scenarios. The system is currently deployed at Alibaba to support a variety of business scenarios, including product recommendation and personalized search at Alibaba's E-Commerce platform. By conducting extensive experiments on a real-world dataset with 492.90 million vertices, 6.82 billion edges and rich attributes, AliGraph performs an order of magnitude faster in terms of graph building (5 minutes vs hours reported from the state-of-the-art PowerGraph platform). At training, AliGraph runs 40%-50% faster with the novel caching strategy and demonstrates around 12 times speed up with the improved runtime. In addition, our in-house developed GNN models all showcase their statistically significant superiorities in terms of both effectiveness and efficiency (e.g., 4.12%--17.19% lift by F1 scores).
                </span>

            </p>

            <p class="schedule-item" data-id="735">
                <strong class="schedule-item-title">Updating Graph Databases with Cypher</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="alastair.green" data-at="neo4j.com">Alastair&nbsp;Green</a>&nbsp;(Neo4j),
                    <a class="author" href="mailto:" data-uz="paolo.guagliardo" data-at="ed.ac.uk">Paolo&nbsp;Guagliardo</a>&nbsp;(University of Edinburgh),
                    <a class="author" href="mailto:" data-uz="libkin" data-at="inf.ed.ac.uk">Leonid&nbsp;Libkin</a>&nbsp;(University of Edinburgh),
                    <a class="author" href="mailto:" data-uz="tobias.lindaaker" data-at="neo4j.com">Tobias&nbsp;Lindaaker</a>&nbsp;(Neo4j),
                    <a class="author" href="mailto:" data-uz="victor.marsault" data-at="u-pem.fr">Victor&nbsp;Marsault</a>&nbsp;(LIGM, UPEM/ESIEE-Paris/ENPC/CNRS),
                    <a class="author" href="mailto:" data-uz="stefan.plantikow" data-at="neo4j.com">Stefan&nbsp;Plantikow</a>&nbsp;(Neo4j),
                    <a class="author" href="mailto:" data-uz="mschuste" data-at="staffmail.ed.ac.uk">Martin&nbsp;Schuster</a>&nbsp;(Abbott Informatics),
                    <a class="author" href="mailto:" data-uz="petra.selmer" data-at="neo4j.com">Petra&nbsp;Selmer</a>&nbsp;(Neo4j), and
                    <a class="author" href="mailto:" data-uz="hannes.voigt" data-at="neo4j.com">Hannes&nbsp;Voigt</a>&nbsp;(Neo4j)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The paper describes the present and the future of graph updates in Cypher, the language of the Neo4j property graph database and several other products. Update features include those with clear analogs in relational databases, as well as those that do not correspond to any relational operators. Moreover, unlike SQL, Cypher updates can be arbitrarily intertwined with querying clauses. After presenting the current state of update features, we point out their shortcomings, most notably violations of atomicity and nondeterministic behavior of updates. These have not been previously known in the Cypher community. We then describe the industry-academia collaboration on designing a revised set of Cypher update operations. Based on discovered shortcomings of update features, a number of possible solutions were devised. They were presented to key Cypher users, who were given the opportunity to comment on how update features are used in real life, and on their preferences for proposed fixes. As the result of the consultation, a new set of update operations for Cypher were designed. Those led to a streamlined syntax, and eliminated the unexpected and problematic behavior that original Cypher updates exhibited.
                </span>

            </p>


        </div>

        <div>
            <div data-day="3">
                <abbr long="Wednesday" short="Wed"></abbr>
                <p><strong>28</strong><em>Aug</em></p>
            </div>
        </div>

        <div>
            <div class="schedule-head" id="Industry_Session_2"><span class="schedule-time">10:30 &ndash; 12:00</span><strong class="main-title">Industry Session 2: High Performance DBs: Both General Purpose and Specialized</strong></div>
            
            <p class="schedule-item" data-id="668">
                <strong class="schedule-item-title">A Lightweight and Efficient Temporal Database Management System in TDSQL</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="lu-wei" data-at="ruc.edu.cn">Wei&nbsp;Lu</a>&nbsp;(Renmin University of China),
                    <a class="author" href="mailto:" data-uz="zhanhaozhao" data-at="ruc.edu.cn">Zhanhao&nbsp;Zhao</a>&nbsp;(Renmin University of China),
                    <a class="author" href="mailto:" data-uz="xiaoyuwang" data-at="tencent.com">Xiaoyu&nbsp;Wang</a>&nbsp;(Tencent Inc., China),
                    <a class="author" href="mailto:" data-uz="blueseali" data-at="tencent.com">Haixiang&nbsp;Li</a>&nbsp;(Tencent Inc., China),
                    <a class="author" href="mailto:" data-uz="zhzm" data-at="ruc.edu.cn">Zhenmiao&nbsp;Zhang</a>&nbsp;(Renmin University of China),
                    <a class="author" href="mailto:" data-uz="shuizhiyu" data-at="ruc.edu.cn">Zhiyu&nbsp;Shui</a>&nbsp;(Renmin University of China),
                    <a class="author" href="mailto:" data-uz="shengye" data-at="tencent.com">Sheng&nbsp;Ye</a>&nbsp;(Tencent Inc.,China),
                    <a class="author" href="mailto:" data-uz="aaronpan" data-at="tencent.com">Anqun&nbsp;Pan</a>&nbsp;(Tencent Inc., China), and
                    <a class="author" href="mailto:" data-uz="duyong" data-at="ruc.edu.cn">Xiaoyong&nbsp;Du</a>&nbsp;(Renmin University of China)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Driven by the recent adoption of temporal expressions into SQL:2011, extensions of temporal support in conventional database management systems (a.b.a. DBMSs) have re-emerged as a research hotspot. In this paper, we present a lightweight yet efficient built-in temporal implementation in Tencent's distributed database management system, namely TDSQL. The novelty of TDSQL's temporal implementation includes: (1) a new temporal data model with the extension of SQL:2011, (2) a built-in temporal implementation with various optimizations, which are also applicable to other DBMSs, and (3) a low-storage-consumption in which only data changes are maintained. For the repeatability purpose, we elaborate the integration of our proposed techniques into MySQL. We conduct extensive experiments on both real-life dataset and synthetic TPC benchmarks by comparing TDSQL with other temporal databases. The results show that TDSQL is lightweight and efficient.
                </span>

            </p>

            <p class="schedule-item" data-id="687">
                <strong class="schedule-item-title">TitAnt: Online Real-time Transaction Fraud Detection in Ant Financial</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="shelsoncao" data-at="gmail.com">Shaosheng&nbsp;Cao</a>&nbsp;(Ant Financial Services Group),
                    <a class="author" href="mailto:" data-uz="xinxing.yangxx" data-at="antfin.com">Xinxing&nbsp;Yang</a>&nbsp;(Ant Financial Services Group),
                    <a class="author" href="mailto:" data-uz="chencen.cc" data-at="antfin.com">Cen&nbsp;Chen</a>&nbsp;(Ant Financial Services Group),
                    <a class="author" href="mailto:" data-uz="jun.zhoujun" data-at="antfin.com">Jun&nbsp;Zhou</a>&nbsp;(Ant Financial Services Group),
                    <a class="author" href="mailto:" data-uz="xl.li" data-at="antfin.com">Xiaolong&nbsp;Li</a>&nbsp;(Ant Financial Services Group), and
                    <a class="author" href="mailto:" data-uz="yuan.qi" data-at="antfin.com">Yuan&nbsp;Qi</a>&nbsp;(Ant Financial Services Group)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    With the explosive growth of e-commerce and the booming of e-payment, detecting online transaction fraud in real time has become increasingly important to Fintech business. To tackle this problem, we introduce the TitAnt, a transaction fraud detection system deployed in Ant Financial, one of the largest Fintech companies in the world. The system is able to predict online real-time transaction fraud in mere milliseconds. We present the problem definition, feature extraction, detection methods, implementation and deployment of the system, as well as empirical effectiveness. Extensive experiments have been conducted on large real-world transaction data to show the effectiveness and the efficiency of the proposed system.
                </span>

            </p>

            <p class="schedule-item" data-id="721">
                <strong class="schedule-item-title">A Distributed System for Large-scale n-gram Language Models at Tencent</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="ecalezlong" data-at="tencent.com">Qiang&nbsp;Long</a>&nbsp;(Tencent),
                    <a class="author" href="mailto:" data-uz="wangwei" data-at="comp.nus.edu.sg">Wei&nbsp;Wang</a>&nbsp;(NUS),
                    <a class="author" href="mailto:" data-uz="austindeng" data-at="tencent.com">Jinfu&nbsp;Deng</a>&nbsp;(Tencent),
                    <a class="author" href="mailto:" data-uz="samanthaliu" data-at="tencent.com">Song&nbsp;Liu</a>&nbsp;(Tencent),
                    <a class="author" href="mailto:" data-uz="zakerhuang" data-at="tencent.com">Wenhao&nbsp;Huang</a>&nbsp;(Tencent),
                    <a class="author" href="mailto:" data-uz="aachen" data-at="tencent.com">Fangying&nbsp;Chen</a>&nbsp;(Tencent), and
                    <a class="author" href="mailto:" data-uz="stephenliu" data-at="tencent.com">Sifan&nbsp;Liu</a>&nbsp;(Tencent)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    n-gram language models are widely used in language processing applications, e.g. automatic speech recognition (ASR), for ranking the candidate word sequences generated from the generator model, e.g. the acoustic model. Large n-gram models typically give good ranking results; however, they require a huge amount of memory storage. While distributing the model across multiple nodes resolves the memory issue, it nonetheless incurs a great network communication overhead and introduces a different bottleneck. In this paper, we present our distributed system developed at Tencent with novel optimization techniques for reducing the network overhead, including distributed indexing, batching and caching. They reduce the network requests and accelerate the operation on each single node. We also propose a cascade fault-tolerance mechanism which adaptively switches to small n-gram models depending on the severity of the failure. Experimental study on 9 ASR datasets confirms that our distributed system scales to large models efficiently, effectively and robustly. We have successfully deployed it for Tencent's WeChat ASR with the peak network traffic at the scale of 100 millions of messages per minute.
                </span>

            </p>

            <p class="schedule-item" data-id="675">
                <strong class="schedule-item-title">AnalyticDB: Real-time OLAP Database System at Alibaba Cloud</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="lizhe.zcq" data-at="alibaba-inc.com">Chaoqun&nbsp;Zhan</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="maomeng.smm" data-at="alibaba-inc.com">Maomeng&nbsp;Su</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="chuangxian.wcx" data-at="alibaba-inc.com">Chuangxian&nbsp;Wei</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="xiaoqiang.pxq" data-at="alibaba-inc.com">XIAOQIANG&nbsp;PENG</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="yibo.ll" data-at="alibaba-inc.com">Liang&nbsp;Lin</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="sh.wang" data-at="alibaba-inc.com">Sheng&nbsp;Wang</a>&nbsp;(Alibaba Group),
                    <a class="author" href="mailto:" data-uz="chenzhe.cz" data-at="alibaba-inc.com">Zhe&nbsp;Chen</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="lifeifei" data-at="alibaba-inc.com">Feifei&nbsp;Li</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="itlanger.pany" data-at="alibaba-inc.com">Yue&nbsp;Pan</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="f.zheng" data-at="alibaba-inc.com">Fang&nbsp;Zheng</a>&nbsp;(Alibaba), and
                    <a class="author" href="mailto:" data-uz="chengliang.ccl" data-at="alibaba-inc.com">Chengliang&nbsp;Chai</a>&nbsp;(Alibaba)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    With data explosion in scale and variety, OLAP databases play an increasingly important role in serving real-time analysis with low latency (e.g., hundreds of milliseconds), especially when incoming queries are complex and ad hoc in nature. Moreover, these systems are expected to provide high query concurrency and write throughput, and support queries over structured and complex data types (e.g., JSON, vector and texts). In this paper, we introduce AnalyticDB, a real-time OLAP database system developed at Alibaba. AnalyticDB maintains all-column indexes in an asynchronous manner with acceptable overhead, which provides low latency for complex ad-hoc queries. Its storage engine extends hybrid row-column layout for fast retrieval of both structured data and data of complex types. To handle large-scale data with high query concurrency and write throughput, AnalyticDB decouples read and write access paths. To further reduce query latency, novel storage-aware SQL optimizer and execution engine are developed to fully utilize the advantages of the underlying storage and indexes. AnalyticDB has been successfully deployed on Alibaba Cloud to serve numerous customers (both large and small). It is capable of holding 100 trillion rows of records, i.e., 10PB+ in size. At the same time, it is able to serve 10m+ writes and 100k+ queries per second, while completing complex queries within hundreds of milliseconds.
                </span>

            </p>

            <p class="schedule-item" data-id="700">
                <strong class="schedule-item-title">Constant Time Recovery in Azure SQL Database</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="panant" data-at="microsoft.com">Panagiotis&nbsp;Antonopoulos</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="peterbyr" data-at="microsoft.com">Peter&nbsp;Byrne</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="waync" data-at="microsoft.com">Wayne&nbsp;Chen</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="cdiaconu" data-at="microsoft.com">Cristian&nbsp;Diaconu</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="raghavt" data-at="microsoft.com">Raghavendra&nbsp;Kodandaramaih</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="hanumak" data-at="microsoft.com">Hanuma&nbsp;Kodavalla</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="praspu" data-at="microsoft.com">Prashanth&nbsp;Purnananda</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="aradu" data-at="microsoft.com">Adrian-Leonard&nbsp;Radu</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="ravellas" data-at="microsoft.com">Chaitanya&nbsp;Sreenivas&nbsp;Ravella</a>&nbsp;(Microsoft), and
                    <a class="author" href="mailto:" data-uz="girishmv" data-at="microsoft.com">Girish&nbsp;Venkataramanappa</a>&nbsp;(Microsoft)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Azure SQL Database and the upcoming release of SQL Server introduce a novel database recovery mechanism that combines traditional ARIES recovery with multi-version concurrency control to achieve database recovery in constant time, regardless of the size of user transactions. Additionally, our algorithm enables continuous transaction log truncation, even in the presence of long running transactions, thereby allowing large data modifications using only a small, constant amount of log space. These capabilities are particularly important for any Cloud database service given a) the constantly increasing database sizes, b) the frequent failures of commodity hardware, c) the strict availability requirements of modern, global applications and d) the fact that software upgrades and other maintenance tasks are managed by the Cloud platform, introducing unexpected failures for the users. This paper describes the design of our recovery algorithm and demonstrates how it allowed us to improve the availability of Azure SQL Database by guaranteeing consistent recovery times of under 3 minutes for 99.999% of recovery cases in production.
                </span>

            </p>


        </div>

        <div>
            <div data-day="4">
                <abbr long="Thursday" short="Thr"></abbr>
                <p><strong>29</strong><em>Aug</em></p>
            </div>
        </div>

        <div>
            <div class="schedule-head" id="Industry_Session_3"><span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Industry Session 3: Implementing and Measuring High Performance Databases</strong></div>
            
            <p class="schedule-item" data-id="715">
                <strong class="schedule-item-title">S3: A Scalable In-memory Skip-List Index for Key-Value Store</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="11421015" data-at="zju.edu.cn">Jingtian&nbsp;Zhang</a>&nbsp;(Zhejiang University),
                    <a class="author" href="mailto:" data-uz="wusai" data-at="zju.edu.cn">Sai&nbsp;Wu</a>&nbsp;(Zhejiang University),
                    <a class="author" href="mailto:" data-uz="3160103832" data-at="zju.edu.cn">Zeyuan&nbsp;Tan</a>&nbsp;(Zhejiang University),
                    <a class="author" href="mailto:" data-uz="cg" data-at="zju.edu.cn">Gang&nbsp;Chen</a>&nbsp;(Zhejiang University),
                    <a class="author" href="mailto:" data-uz="zhushi.chengzs" data-at="alibaba-inc.com">Zhushi&nbsp;Cheng</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="mingsong.cw" data-at="alibaba-inc.com">Wei&nbsp;Cao</a>&nbsp;(Alibaba),
                    <a class="author" href="mailto:" data-uz="jianchuan.gys" data-at="alibaba-inc.com">Yusong&nbsp;Gao</a>&nbsp;(Alibaba Cloud), and
                    <a class="author" href="mailto:" data-uz="xiaojie.fxj" data-at="alibaba-inc.com">Xiaojie&nbsp;Feng</a>&nbsp;(Alibaba Cloud)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Many new memory indexing structures have been proposed and outperform current in-memory skip-list index adopted by LevelDB, RocksDB and other key-value systems. However, those new indexes cannot be easily intergrated with key-value systems, because most of them do not consider how the data can be efficiently flushed to disk. Some assumptions, such as fixed size key and value, are unrealistic for real applications. In this paper, we present S3, a scalable in-memory skip-list index for the customized version of RocksDB in Alibaba Cloud. S3 adopts a two-layer structure. In the top layer, a cache-sensitive structure is used to maintain a few guard entries to facilitate the search over the skip-list. In the bottom layer, a semi-ordered skip-list index is built to support highly concurrent insertions and fast lookup and range query. To further improve the performance, we train a neural model to select guard entries intelligently according to the data distribution and query distribution. Experiments on multiple datasets show that S3 achieves a comparable performance to other new memory indexing schemes, and can replace current in-memory skip-list of LevelDB and RocksDB to support huge volume of data.
                </span>

            </p>

            <p class="schedule-item" data-id="674">
                <strong class="schedule-item-title">Native Store Extension for SAP HANA</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="reza.sherkat" data-at="sap.com">Reza&nbsp;Sherkat</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="cflorendo" data-at="gmail.com">Colin&nbsp;Florendo</a>&nbsp;(SAP),
                    <a class="author" href="mailto:" data-uz="mihnea.andrei" data-at="sap.com">Mihnea&nbsp;ANDREI</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="rolando.blanco" data-at="sap.com">Rolando&nbsp;Blanco</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="adrian.dragusanu" data-at="gmail.com">Adrian&nbsp;Dragusanu</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="amit.pathak" data-at="sap.com">Amit&nbsp;Pathak</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="pushkar.khadilkar" data-at="sap.com">Pushkar&nbsp;Khadilkar</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="neeraj.kulkarni" data-at="sap.com">Neeraj&nbsp;Kulkarni</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="christian.lemke" data-at="sap.com">Christian&nbsp;Lemke</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="sebastian.seifert" data-at="sap.com">Sebastian&nbsp;Seifert</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="iyer.sarika" data-at="gmail.com">Sarika&nbsp;Iyer</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="sasikanth.simhachala" data-at="gmail.com">Sasikanth&nbsp;Gottapu</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="robert.schulze" data-at="sap.com">Robert&nbsp;Schulze</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="chaitanya.gottipati" data-at="sap.com">Chaitanya&nbsp;Gottipati</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="nirvik.basak" data-at="sap.com">Nirvik&nbsp;Basak</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="sosomegan" data-at="gmail.com">Yanhong&nbsp;Wang</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="vivek.kandiyanallur" data-at="sap.com">Vivek&nbsp;Kandiyanallur</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="santypendap" data-at="gmail.com">Santosh&nbsp;Pendap</a>&nbsp;(Salesforce.com Inc),
                    <a class="author" href="mailto:" data-uz="dheren.gala" data-at="sap.com">Dheren&nbsp;Gala</a>&nbsp;(SAP SE),
                    <a class="author" href="mailto:" data-uz="rajesh.almeida" data-at="sap.com">Rajesh&nbsp;Almeida</a>&nbsp;(SAP SE), and
                    <a class="author" href="mailto:" data-uz="prasanta.ghosh" data-at="microsoft.com">Prasanta&nbsp;Ghosh</a>&nbsp;(SAP SE)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We present an overview of SAP HANA's Native Store Extension (NSE). This extension substantially increases database capacity allowing scales far beyond available system memory. NSE is based on a hybrid in-memory and paged column store architecture composed from data access primitives. These primitives enable the processing of hybrid columns using the same algorithms optimized for traditional HANA in-memory columns. Using only three key primitives, we effectively fabricated byte-compatible counterparts for complex memory resident data structures (e.g. dictionary and hash-index), compressed schemes (e.g. sparse and run-length encoding), and exotic data types (e.g. geo-spatial). We developed a new buffer cache which optimizes the management of paged resources by smart strategies sensitive to page type and access patterns. The buffer cache integrates with HANA's new execution engine that builds pipelined prefetch requests to improve disk access patterns and hot buffer retention. A novel load unit configuration, along with a unified persistence format, allows the hybrid column store to dynamically switch between in-memory and paged data access to balance performance and storage economy according to application demands while reducing Total Cost of Ownership (TCO). A new heterogenous partitioning scheme supports a load unit specification at table, partition, and column level. Finally, a new advisor recommends optimal load unit configurations. Our experiments illustrate the performance and memory footprint improvements on typical customer scenarios.
                </span>

            </p>

            <p class="schedule-item" data-id="704">
                <strong class="schedule-item-title">Choosing A Cloud DBMS: Architectures and Tradeoffs</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="jjtan" data-at="alum.mit.edu">Junjay&nbsp;Tan</a>&nbsp;(Brown University),
                    <a class="author" href="mailto:" data-uz="thanaa.ghanem" data-at="metrostate.edu">Thanaa&nbsp;Ghanem</a>&nbsp;(Metropolitan State University, USA),
                    <a class="author" href="mailto:" data-uz="mperron" data-at="csail.mit.edu">Matthew&nbsp;Perron</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="yxy" data-at="csail.mit.edu">Xiangyao&nbsp;Yu</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="stonebraker" data-at="csail.mit.edu">Michael&nbsp;Stonebraker</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="david.dewitt" data-at="outlook.com">David&nbsp;DeWitt</a>&nbsp;(MIT),
                    <a class="author" href="mailto:" data-uz="marco" data-at="cs.umass.edu">Marco&nbsp;Serafini</a>&nbsp;(University of Massachusetts Amherst),
                    <a class="author" href="mailto:" data-uz="aaboulnaga" data-at="qf.org.qa">Ashraf&nbsp;Aboulnaga</a>&nbsp;(Qatar Computing Research Institute, HBKU), and
                    <a class="author" href="mailto:" data-uz="kraska" data-at="mit.edu">Tim&nbsp;Kraska</a>&nbsp;(MIT)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    As analytic (OLAP) applications move to the cloud, DBMSs have shifted from employing a pure shared-nothing design with locally attached storage to a hybrid design that combines the use of shared-storage (e.g., AWS S3) with the use of shared-nothing query execution mechanisms. This paper sheds light on the resulting tradeoffs, which have not been properly identified in previous work. To this end, it evaluates the TPC-H benchmark across a variety of DBMS offerings running in a cloud environment (AWS) on fast 10Gb+ networks, specifically database-as-a-service offerings (Redshift, Athena), query engines (Presto, Hive), and a traditional cloud agnostic OLAP database (Vertica). While these comparisons cannot be apples-to-apples in all cases due to cloud configuration restrictions, we nonetheless identify patterns and design choices that are advantageous. These include prioritizing low-cost object stores like S3 for data storage, using system agnostic yet still performant columnar formats like ORC that allow easy switching to other systems for different workloads, and making features that benefit subsequent runs like query precompilation and caching remote data to faster storage optional rather than required because they disadvantage ad hoc queries.
                </span>

            </p>

            <p class="schedule-item" data-id="741">
                <strong class="schedule-item-title">Adapting TPC-C Benchmark to Measure Performance of Multi-Document Transactions in MongoDB</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="asya" data-at="mongodb.com">Asya&nbsp;Kamsky</a>&nbsp;(MongoDB, Inc)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    MongoDB is a popular distributed database that supports replication, horizontal partitioning (sharding), a flexible document schema and ACID guarantees on the document level. While it is generally grouped with "NoSQL" databases, MongoDB provides many features similar to those of traditional RDBMS such as secondary indexes, an ad hoc query language, support for complex aggregations, and new as of version 4.0 multi-statement, multi-document ACID transactions. We looked for a well understood OLTP workload benchmark to use in our own system performance test suite to establish a baseline of transaction performance to enable flagging performance regressions, as well as improvements as we continue to add new functionality. While there exist many published and widely used benchmarks for RDBMS OLTP workloads, there are none specifically for document databases. This paper describes the process of adapting an existing traditional RDBMS benchmark to MongoDB query language and transaction semantics to allow measuring transaction performance. We chose to adapt the TPC-C benchmark even though it assumes a relational database schema and SQL, hence extensive changes had to be made to stay consistent with MongoDB best practices. Our goal did not include creating official TPC-C certifiable results, however, every attempt was made to stay consistent with the spirit of the original benchmark specification as well as to be compliant to all specification requirements where possible. We discovered that following best practices for document schema design achieves better performance than using required normalized schema. All the source code used and validation scripts are published in github to allow the reader to recreate and verify our results.
                </span>

            </p>

            <p class="schedule-item" data-id="728">
                <strong class="schedule-item-title">A Morsel-Driven Query Execution Engine for Heterogeneous Multi-Cores</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="kayhan" data-at="cs.brown.edu">Kayhan&nbsp;Dursun</a>&nbsp;(Brown University),
                    <a class="author" href="mailto:" data-uz="carsten.binnig" data-at="cs.tu-darmstadt.de">Carsten&nbsp;Binnig</a>&nbsp;(TU Darmstadt),
                    <a class="author" href="mailto:" data-uz="ugur" data-at="cs.brown.edu">Ugur&nbsp;Cetintemel</a>&nbsp;(Brown University),
                    <a class="author" href="mailto:" data-uz="garret.swart" data-at="oracle.com">Garret&nbsp;Swart</a>&nbsp;(Oracle), and
                    <a class="author" href="mailto:" data-uz="weiwei.gong" data-at="oracle.com">Weiwei&nbsp;Gong</a>&nbsp;(Oracle)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Currently, we face the next major shift in processor designs that arose from the physical limitations known as the "dark silicon effect". Due to thermal limitations and shrinking transistor sizes, multi-core scaling is coming to an end. A major new direction that hardware vendors are currently investigating involves specialized and energy-efficient hardware accelerators (e.g., ASICs) placed on the same die as the normal CPU cores. In this paper, we present a novel query processing engine called SiliconDB that targets such heterogeneous processor environments. We leverage the Sparc M7 platform to develop and test our ideas. Based on the SSB benchmarks, as well as other micro benchmarks, we compare the efficiency of SiliconDB with existing execution strategies that make use of co-processors (e.g., FPGAs, GPUs) and demonstrate speed-up improvements of up to 2x.
                </span>

            </p>


            <div class="schedule-head" id="Industry_Session_4"><span class="schedule-time">14:00 &ndash; 15:30</span><strong class="main-title">Industry Session 4: Pretty Good Answers and Pretty Darned Fast!</strong></div>
            
            <p class="schedule-item" data-id="720">
                <strong class="schedule-item-title">DDSketch: A Fast and Fully-Mergeable Quantile Sketch with Relative-Error Guarantees</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="charles.masson" data-at="datadoghq.com">Charles&nbsp;Masson</a>&nbsp;(Datadog),
                    <a class="author" href="mailto:" data-uz="jee.rim" data-at="datadoghq.com">Jee&nbsp;Rim</a>&nbsp;(Datadog), and
                    <a class="author" href="mailto:" data-uz="homin" data-at="datadoghq.com">Homin&nbsp;Lee</a>&nbsp;(Datadog)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Summary statistics such as the mean and variance are easily maintained for large, distributed data streams, but order statistics (i.e., sample quantiles) can only be approximately summarized. There is extensive literature on maintaining quantile sketches where the emphasis has been on bounding the rank error of the sketch while using little memory. Unfortunately, rank error guarantees do not preclude arbitrarily large relative errors, and this often occurs in practice when the data is heavily skewed. Given the distributed nature of contemporary large-scale systems, another crucial property for quantile sketches is mergeablility, i.e., several combined sketches must be as accurate as a single sketch of the same data. We present the first fully-mergeable, relative-error quantile sketching algorithm with formal guarantees. The sketch is extremely fast and accurate, and is currently being used by Datadog at a wide-scale.
                </span>

            </p>

            <p class="schedule-item" data-id="698">
                <strong class="schedule-item-title">Experiences with Approximating Queries in Microsoft's Production Big-Data Clusters</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="srikanth" data-at="microsoft.com">Srikanth&nbsp;Kandula</a>&nbsp;(Microsoft Research),
                    <a class="author" href="mailto:" data-uz="kulee" data-at="microsoft.com">Kukjin&nbsp;Lee</a>&nbsp;(Microsoft),
                    <a class="author" href="mailto:" data-uz="surajitc" data-at="microsoft.com">Surajit&nbsp;Chaudhuri</a>&nbsp;(Microsoft Research), and
                    <a class="author" href="mailto:" data-uz="marcfr" data-at="microsoft.com">Marc&nbsp;T&nbsp;Friedman</a>&nbsp;(Microsoft)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    With the rapidly growing volume of data, it is more attractive than ever to leverage approximations to answer analytic queries. Sampling is a powerful technique which has been studied extensively from the point of view of facilitating approximation. Yet, there has been no large-scale study of effectiveness of sampling techniques in big data systems. In this paper, we describe an in-depth study of the sampling-based approximation techniques that we have deployed in Microsoft's big data clusters. We explain the choices we made to implement approximation, identify the usage cases, and study detailed data that sheds insight on the usefulness of doing sampling based approximation.
                </span>

            </p>

            <p class="schedule-item" data-id="660">
                <strong class="schedule-item-title">SAP HANA goes private - From Privacy Research to Privacy Aware Enterprise Analytics</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="stephan.kessler" data-at="sap.com">Stephan&nbsp;Kessler</a>&nbsp;(SAP),
                    <a class="author" href="mailto:" data-uz="jens.hoff" data-at="sap.com">Jens&nbsp;Hoff</a>&nbsp;(SAP), and
                    <a class="author" href="mailto:" data-uz="freytag" data-at="informatik.hu-berlin.de">Johann-Christoph&nbsp;Freytag</a>&nbsp;(HU Berlin)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Over the last 20 years, the progress of information technology has allowed many companies to generate, integrate, store, and analyze data of unprecedented size and complexity. In many cases, this data is personal data and how it can be used is therefore subject to laws that depend on the specific countries and application domains. For example, the General Data Protection Regulation (GDPR) introduced in the European Union imposes strict rules on how personal data can be processed. Analyzing personal data can create tremendous value, but at the same time companies must ensure that they remain legally compliant. Unfortunately, existing systems offer only limited or no support at all for processing personal data in a privacy-aware manner. Approaches that have emerged from the academic and industrial research environments need to be integrated into large systems (like enterprise systems) in a manageable and scalable way. In many IT environments, it is also desirable and necessary to combine and to integrate personal data with other (non-personal) data in a seamless fashion. In this paper, we present the first steps that SAP has taken to provide its database management system HANA with privacy-enhanced processing capabilities, referred to in the following as SAP HANA Data Anonymization. Various goals on both the conceptual and technical levels were followed with the aim of providing SAP customers today with an integrated processing environment for personal and non-personal data.
                </span>

            </p>

            <p class="schedule-item" data-id="682">
                <strong class="schedule-item-title">Tunable Consistency in MongoDB</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="william.schultz" data-at="mongodb.com">William&nbsp;Schultz</a>&nbsp;(MongoDB),
                    <a class="author" href="mailto:" data-uz="tess.avitabile" data-at="mongodb.com">Therese&nbsp;M&nbsp;Avitabile</a>&nbsp;(MongoDB), and
                    <a class="author" href="mailto:" data-uz="alyson.cabral" data-at="mongodb.com">Alyson&nbsp;Cabral</a>&nbsp;(MongoDB)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Distributed databases offer high availability but can impose high costs on client applications in order to maintain strong consistency at all times. MongoDB is a document oriented database whose replication system provides a variety of consistency levels allowing client applications to select the trade-offs they want to make when it comes to consistency and latency, at a per operation level. In this paper we discuss the tunable consistency models in MongoDB replication and their utility for application developers. We discuss how the MongoDB replication system's speculative execution model and data rollback protocol help make this spectrum of consistency levels possible. We also present case studies of how these consistency levels are used in real world applications, along with a characterization of their performance benefits and trade-offs.
                </span>

            </p>

            <p class="schedule-item" data-id="690">
                <strong class="schedule-item-title">Customizable and Scalable Fuzzy Join for Big Data</strong>
                <span class="schedule-item-people">
                    <a class="author" href="mailto:" data-uz="zmchen" data-at="microsoft.com">Zhimin&nbsp;Chen</a>&nbsp;(Microsoft Research),
                    <a class="author" href="mailto:" data-uz="wanyue" data-at="microsoft.com">Yue&nbsp;Wang</a>&nbsp;(Microsoft Research),
                    <a class="author" href="mailto:" data-uz="viveknar" data-at="microsoft.com">Vivek&nbsp;Narasayya</a>&nbsp;(Microsoft Research), and
                    <a class="author" href="mailto:" data-uz="surajitc" data-at="microsoft.com">Surajit&nbsp;Chaudhuri</a>&nbsp;(Microsoft Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Fuzzy join is an important primitive for data cleaning. The ability to customize fuzzy join is crucial to allow applications to address domain-specific data quality issues such as synonyms and abbreviations. While efficient indexing techniques exist for single-node implementations of customizable fuzzy join, the state-of-the-art scale-out techniques do not support customization, and exhibit poor performance and scalability characteristics. We describe the design of a scale-out fuzzy join operator that supports customization. We use a locality-sensitive-hashing (LSH) based signature scheme, and introduce optimizations that result in significant speed up with negligible impact on recall. We evaluate our implementation on the Azure Databricks version of Spark using several real-world and synthetic data sets. We observe speedups exceeding 50X compared to the best-known prior scale-out technique, and close to linear scalability with data size and number of nodes.
                </span>

            </p>


        </div>

    </div>

</section>
<?php
define('PageTitle', "Industrial Track Papers");
define('PageDescription', "List of accepted industrial track papers.");
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "name": "Industrial Track Papers",
  "url": "https://vldb.org/2019/?papers-industrial",
  "description": "List of accepted industrial track papers.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://vldb.org/",
        "name": "VLDB"
      }
    },{
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://vldb.org/conference.html",
        "name": "Conferences"
      }
    },{
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://vldb.org/2019/",
        "name": "2019"
      }
    },{
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://vldb.org/2019/?program",
        "name": "Conference Program"
      }
    },{
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@id": "https://vldb.org/2019/?papers-industrial",
        "name": "Industrial Track Papers"
      }
    }]
  }
}


</script>